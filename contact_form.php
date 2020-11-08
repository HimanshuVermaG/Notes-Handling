<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Contact form
        </title>
        <link rel="stylesheet" href="CSS/shiva.css">
        <link rel="stylesheet" href="CSS/welcome.css">
    </head>
    <body style=" background: #34495e;">

      
<div class="wrapper">
        <div class="sidebar">
       <     <h2>Notes Handling</h2>
            <ul>
                <li><a href="welcome.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="userprofile.php"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="about.php"><i class="fas fa-address-card"></i>About Us</a></li>
                <li><a href="contact_form.php"><i class="fas fa-address-book"></i>Contact</a></li>
                <li><a href="upload.php"><i class="fas fa-upload"></i>Upload File</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                <li><a href="index.php"><i class="fas fa-sign-out-alt"></i>commentbox</a></li>
            </ul>
            <div class="social_media">
                <a href="https://www.facebook.com/profile.php?id=100005092158821"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com/uniqueboyhrithik?igshid=17m4l83ajfm18"><i class="fab fa-instagram"></i></a>
            </div>
        </div>


        <main>
    
         
           
            <form  class="form" action="contact.php" METHOD="POST">

            <h1>contact us</h1>
                <input type="text" name="name" placeholder="Full name">
                <input type="text" name="mail" placeholder="Your e-mail">
                <input type="text" name="subject" placeholder="subject">
                <textarea name="message" placeholder="message"></textarea>
                <input type="submit" name="" value="SEND">
            </form>
        
        </main>
    </body>
</h