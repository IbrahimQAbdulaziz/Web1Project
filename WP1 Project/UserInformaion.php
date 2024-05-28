<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LogStyle/style.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <img class="logo"src="./img/fwe_2x_0b6366fe-afb3-4bd8-a010-cded84912458_450x.avif" alt="">
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = "SELECT * FROM users WHERE Id=$id";
            $result = mysqli_query($con, $query);
            
            if ($result && mysqli_num_rows($result) > 0) {
                $userData = mysqli_fetch_assoc($result);
                $res_Uname = $userData['Username'];
                $res_Email = $userData['Email'];
                $res_Age = $userData['Age'];
                $res_id = $userData['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'> <button class='btn'> Change Profile</button></a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
            <a href="./index.php"> <button class="btn">Store</button> </a>
        </div>
    </div>

    <main>
       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            </div>
            <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>And you are <b><?php echo $res_Age ?> years old</b>.</p> 
            </div>
          </div>
       </div>
    </main>
</body>
</html>