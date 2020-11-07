<?php
session_start();
if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'] !== true)) {
    header("location: login.php");
} else {
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/welcome.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <title>NOTES-Handling</title>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>Notes Handling</h2>
            <ul>
                <li><a href="welcome.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="about.php"><i class="fas fa-address-card"></i>About</a></li>
                <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
                <li><a href="upload.php"><i class="fas fa-upload"></i>Upload File</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </ul>
            <div class="social_media">
                <a href="https://www.facebook.com/login"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/accounts/login/?source=auth_switcher"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main_content">
            <div class="header">
                <h3>Home</h3>
            </div>
            <div class="info">
                <div class="sub_header">
                    <h4>B.Tech > CSE > 1st Year</h4>
                </div>
                <div class="sub_blocks">
                    <a href="#">Physics</a>
                    <a href="#">Basic-Electrical-Engineering </a>
                    <a href="#">Math II</a>
                    <a href="#">Engineering Graphics & Design</a>
                    <a href="#">Chemistry</a>
                    <a href="#">Professional English</a>
                    <a href="#">Workshop</a>
                </div>
                <div class="sub_header">
                    <h4>B.Tech > CSE > 2nd Year</h4>
                </div>
                <div class="sub_blocks">
                    <a href="notes_code/B.Tech_2nd_yr/DSTL.php">Discrete Structures & Theory of Logic</a>
                    <a href="notes_code/B.Tech_2nd_yr/COA.php">Computer Organization & Architecture</a>
                    <a href="notes_code/B.Tech_2nd_yr/MATH_IV.php">Math IV</a>
                    <a href="notes_code/B.Tech_2nd_yr/EE.php">Electronics Engineering</a>
                    <a href="notes_code/B.Tech_2nd_yr/DS.php">Data Structure</a>
                    <a href="notes_code/B.Tech_2nd_yr/TC.php">Technical Communication</a>
                    <a href="notes_code/B.Tech_2nd_yr/ESE.php">Energy Science & Engineering </a>
                </div>
            </div>
        </div>
    </div>

</body>