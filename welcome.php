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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>NOTES-Handling</title>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">NOTES-Handling</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="register.php">About</a>
                <a class="nav-item nav-link" href="#">Contact Us</a>
                <a class="nav-item nav-link" href="#"><?php echo "Welcome " . $_SESSION['username'] ?></a>
                <a class="nav-item nav-link" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <main>
        <section class="gallery-links">
            <div class="wrapper">
                <h2>Gallery</h2>
                <div class="gallery-container">
                    <?php             
                    include_once 'includes/gallerydbh.inc.php';
                    
                    $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                        echo "SQL statement failed!";
                    }
                    else{
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while ($row = mysqli_fetch_assoc($result)){

                            echo
                            '<p><a href="#">
                            <div><img src="img/gallery/'.$row["imgFullNameGallery"].'" width="150px" height="150px"></div>
                                <h3>'.$row["titleGallery"].'</h3>
                                <p>'.$row["descGallery"].'</p>
                            </a></p>
                            <a href="phpdownload.php?file=' . urlencode($row["imgFullNameGallery"]) . '"><button class="btn"><i class="download"></i> Download</button></a>
                            ';
                        }
                    }
                    
                    
                    ?>
                    
                </div>
                
                <div class="gallery-upload">
                    <form action="include/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="filename" placeholder="File name ...">
                        <input type="text" name="filetitle" placeholder="Image name ...">
                        <input type="text" name="filedesc" placeholder="Image description ...">
                        <input type="file" name="file">
                        <button type="submit" name= "submit">UPLOAD</button>
                        </form>
                </div>
            </div>
        </section>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>