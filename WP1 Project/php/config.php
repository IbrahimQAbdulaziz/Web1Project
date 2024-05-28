<?php 
 $host = 'localhost';
 $port = 308; 
 $user = 'root';
 $password = '';
 $database = 'tutorial';
 $con = mysqli_connect($host . ':' . $port, $user, $password, $database) or die("Couldn't connect");
?>