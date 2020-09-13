<!DOCTYPE html>
<html>
    <head>
        <title>Signup Form</title>
    </head>
    <body>
        <form  action="nh_project/signup.php" method="POST">
            <h1>Signup</h1>
        <input type="text" name="fname" placeholder="firstname">
         <br>  
        <input type="text" name="lname" placeholder="lastname">
        <br>  
        <input type="email" name="email" placeholder="email">
        <br>  
        <input type="text" name="uid" placeholder="username">
        <br>  
        <input type="password" name="pwd" placeholder="password">
        <br>  
        <button type="submit" name="submit">SUBMIT</submit>
        </form>
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
    </body>
</html>