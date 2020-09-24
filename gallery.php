<!DOCTYPE html>
<html>
    <head>
        <title>image upload</title>
    </head>
    <body>
        <div class="galley-container">

            <?php
               include_once 'includes/gallerydbh.inc.php';

               $sql="SELECT * FROM gallery ORDER BY orderGallery Desc";
               $stmt=mysqli_stmt_init($conn);

               if(!mysqli_stmt_prepare($stmt,$sql)){
                   echo "sql statement failed";
               }else{
                   mysqli_stmt_execute($stmt);
                   $result=mysqli_stmt_get_result($stmt);

                   while($row=mysqli_fetch_assoc($result)){
                    echo '<a href="#">
                    <div style="background-image:url('.$row["iimgFullNameGallery"].');"></div>
                    <h3> '.$row['titleGallery'].'</h3>
                    <p>'.$row['descGallery'].'</p>
                    </a>' ;
                   }
               }

               

            ?>

        </div>
        <div>
            <form action="includes/gallery-upload.inc.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="file name...">
                <input type="text" name="filetitle" placeholder="image title">
                <input type="text" name="filedesc" placeholder="image description...">
                <input type="file" name="file">
                <button type="submit" name="submit">upload</button>
            </form>
        </div>
    </body>
</html>