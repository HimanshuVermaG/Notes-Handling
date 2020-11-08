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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/nh_project/CSS/welcome.css">
    <link rel="stylesheet" href="/nh_project/CSS/notes.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <title>NOTES-Handling</title>
</head>

<body>

    <div class="wrapper">
    <div class="sidebar">
        <h2>Notes Handling</h2>
        <ul>
            <li><a href="/nh_project/welcome.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="/nh_project/upload.php"><i class="fas fa-upload"></i>Upload File</a></li>
            <li><a href="/nh_project/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header"><h3>Home</h3></div>  
        <div class="info">
            <div class="sub_header"><h4>B.Tech > CSE > 1st Year >EE</h4></div>
            <div class="sub_blocks">
                <a href="/nh_project/notes_file/B.Tech_2nd_yr/DSTL/Unit 1/Unit-1.pdf">Unit-1</a>
                <a href="/nh_project/notes_file/B.Tech_2nd_yr/DSTL/Unit 1/Unit-1.pdf">Unit-2</a>
                <a href="/nh_project/notes_file/B.Tech_2nd_yr/DSTL/Unit 1/Unit-1.pdf">Unit-3</a>
                <a href="/nh_project/notes_file/B.Tech_2nd_yr/DSTL/Unit 1/Unit-1.pdf">Unit-4</a>
                <a href="/nh_project/notes_file/B.Tech_2nd_yr/DSTL/Unit 1/Unit-1.pdf">Unit-5</a>

            </div>

      </div>
    </div>
</div>

</body>