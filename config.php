<?php
define('DB_SEVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','demouser');

// Try connecting to the database
$conn = mysqli_connect(DB_SEVER,DB_USERNAME,DB_PASSWORD,DB_NAME); 

// Check the connection
if($conn == false)
    dir('Error: Connot connect');
?>