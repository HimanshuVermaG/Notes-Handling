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
                <li><a href="userprofile.php"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="about.php"><i class="fas fa-address-card"></i>About</a></li>
                <li><a href="contact_form.php"><i class="fas fa-address-book"></i>Contact</a></li>
                <li><a href="upload.php"><i class="fas fa-upload"></i>Upload File</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                <li><a href="index.php"><i class="fas fa-sign-out-alt"></i>commentbox</a></li>
            </ul>
            <div class="social_media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main_content">
            <div class="header">
                <h3>Upload File</h3>
            </div>
            <div class="sub_header">
                <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="filename" placeholder="File name ...">
                    <input type="text" name="filetitle" placeholder="Image name ...">
                    <input type="text" name="filedesc" placeholder="Image description ...">
                    <input type="file" name="file">
                    <button type="submit" name="submit">UPLOAD</button>
                </form>
            </div>
            <div class="file_prv">
                <?php
                include_once 'includes/gallerydbh.inc.php';

                $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "SQL statement failed!";
                } else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    while ($row = mysqli_fetch_assoc($result)) {

                        echo '<a href="#">
                
                                <div class = "img"><img src="img/gallery/' . $row["imgFullNameGallery"] . '" width="150px" height="150px" margin= "5px"></div>
                              
                                  <h3> ' . $row['titleGallery'] . '</h3>
                                  <p>' . $row['descGallery'] . '</p>
                                  </a>';
                    }
                }


                ?>
            </div>

        </div>

    </div>
    </div>
</body>