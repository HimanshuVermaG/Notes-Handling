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
    <link rel="stylesheet" href="welcome.css">
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
            <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="#"><i class="fas fa-upload"></i>Upload File</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header"><h3>Gallery</h3></div>  
        <div class="info">
            <div class="sub_header"><h4>B.Tech > CSE > 1st Year</h4></div>
                <div class="sub_blocks">
                    <a href="#">Physics</a>
                    <a href="#">Basic-Electrical-Engineering </a>
                    <a href="#">Math II</a>
                    <a href="#">Engineering Graphics & Design</a>
                    <a href="#">Chemistry</a>
                    <a href="#">Professional English</a>
                    <a href="#">Workshop</a>
                </div>
            <div class="sub_header"><h4>B.Tech > CSE > 2nd Year</h4></div>
            <div class="sub_blocks">
                    <a href="#">Discrete Structures & Theory of Logic</a>
                    <a href="#">Computer Organization & Architecture</a>
                    <a href="#">Math IV</a>
                    <a href="#">Engineering Graphics & Design</a>
                    <a href="#">Data Structure</a>
                    <a href="#">Technical Communication</a>
                    <a href="#">Energy Science & Engineering </a>
                </div>
      </div>
    </div>
</div>

    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>