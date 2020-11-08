<?php

 include('config.php');

	session_start();

	$user_check=$_SESSION['username'];

	$ses_sql=mysqli_query($conn,"select username from users where username='$user_check'");

	$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);


    $loggedin_session=$row['username'];

	//$_SESSION['user'] = 'himanshu';


?>