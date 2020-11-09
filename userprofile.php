<?php
include('session.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="CSS/profile.css" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/welcome.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


    <title>user profile page</title>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>Notes Handling</h2>
            <ul>
                <li><a href="welcome.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="userprofile.php"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="about.php"><i class="fas fa-address-card"></i>About</a></li>
                <li><a href="contact_form.php"><i class="fas fa-address-book"></i>Contact</a></li>
                <li><a href="upload.php"><i class="fas fa-upload"></i>Upload File</a></li>
                <li><a href="index.php"><i class="fas fa-comment"></i>Comment</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </ul>
            <div class="social_media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <header>

        </header>
        <div id="center">
            <!-- <h1 align='center'>Welcome <?php echo $loggedin_name; ?></h1> -->
            <div id="contentbox">
                <?php
                $sql = "SELECT * FROM users where Id = $loggedin_id";
                $result = mysqli_query($conn, $sql);
                ?>
                <?php
                while ($rows = mysqli_fetch_array($result)) {
                ?>
                    <div id="signup">
                        <div id="signup-st">
                            <form action="" method="POST" id="signin" id="reg">
                                <div id="reg-head" class="headrg">Your Profile</div>
                                <table border="0" align="center" cellpadding="2" cellspacing="0">

                                    <tr id="lg-1">
                                        <td class="tl-1">
                                            <div align="left" id="tb-name">Reg id:</div>
                                        </td>
                                        <td class="tl-4"><?php echo $rows['id']; ?></td>
                                    </tr>

                                    <tr id="lg-1">
                                        <td class="tl-1">
                                            <div align="left" id="tb-name">name:</div>
                                        </td>
                                        <td class="tl-4"><?php echo $rows['name']; ?></td>
                                    </tr>

                                    <tr id="lg-1">
                                        <td class="tl-1">
                                            <div align="left" id="tb-name">Email id:</div>
                                        </td>
                                        <td class="tl-4"><?php echo $rows['username']; ?></td>
                                    </tr>

                                    <tr id="lg-1">
                                        <td class="tl-1">
                                            <div align="left" id="tb-name">College Name:</div>
                                        </td>
                                        <td class="tl-4"><?php echo $rows['collegename']; ?></td>
                                    </tr>

                                    <tr id="lg-1">
                                        <td class="tl-1">
                                            <div align="left" id="tb-name">Course Name:</div>
                                        </td>
                                        <td class="tl-4"><?php echo $rows['coursename']; ?></td>
                                    </tr>


                                    <tr id="lg-1">
                                        <td class="tl-1">
                                            <div align="left" id="tb-name">Branch:</div>
                                        </td>
                                        <td class="tl-4"><?php echo $rows['branchname']; ?></td>
                                    </tr>

                                    <tr id="lg-1">
                                        <td class="tl-1">
                                            <div align="left" id="tb-name">Year:</div>
                                        </td>
                                        <td class="tl-4"><?php echo $rows['year']; ?></td>
                                    </tr>


                                </table>
                        </div>
                    </div>
                <?php
                    // close while loop 
                }
                ?>
            </div>
        </div>
    </div>
    </br>
</body>

</html>