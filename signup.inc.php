<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    // Submit these to a database
    $Servername="localhost";
    $Username="root";
    $Password="";
    $Name="nh-project";
    
    $conn=mysqli_connect($Servername,$Username,$Password,$Name);
    if (!$conn){
        die("Sorry we failed connect: ".mysqli_connect_errno());
    }
}
?>