<?php

if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $subject = $_POST['Subject'];
    $mailFrom = $_POST['Email'];
    $message = $_POST['Message'];

    $mailTo = "dj2000official@gmail.com";
    $headers = "From: ".$mailFrom;
    $headers = "Reply-To:".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers) or die("Error!");
}
?>