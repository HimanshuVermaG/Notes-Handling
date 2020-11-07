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
    <link rel="stylesheet" href="CSS/about.css">
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
                <li><a href="#"><i class="fas fa-address-card"></i>About Us</a></li>
                <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
                <li><a href="upload.php"><i class="fas fa-upload"></i>Upload File</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </ul>
            <div class="social_media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main_content">
            <div class="header">
                <h3>About Us</h3>
            </div>
            <div class="info">
                <div class="sub_header">
                    <h4>Members</h4>
                </div>
                <div class="sub_img">
                    <div class="image" style="border-radius: 5px;">
                        <a><img src="about/DSC00567.jpg" alt="" width="150px" height="150px">
                        </a>
                        <a><img src="about/pp.jpg" alt="" width="150px" height="150px"></a>
                        <a></a>
                    </div>
                </div>
                <div class="sub_blocks">
                    <a href="notes_code/B.Tech_2nd_yr/DSTL.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nesciunt, necessitatibus itaque obcaecati distinctio, molestiae, quasi deleniti tenetur fugiat accusamus facere iure facilis sunt consequuntur nobis natus numquam. Eos, molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus repudiandae facilis consectetur, illo impedit similique ducimus labore alias ipsum porro corrupti eaque accusantium est hic pariatur ea beatae asperiores? Quos eum sint rerum, necessitatibus suscipit velit et voluptatem exercitationem? Optio.
            </div>
        </div>
    </div>

</body>