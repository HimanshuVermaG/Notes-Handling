<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];


    $mailTO = "hrithiksahu23@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have receive an e-mail from ".$name.".\n\n".$message;

    mail($mailTo,$subject,$txt,$headers);
    header("Location: contact_form.php?mailsender");
}