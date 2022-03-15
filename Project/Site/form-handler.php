<?php
    header('Content-Type: text/html; charset=UTF-8');
    $db = mysqli_connect ("localhost","root", "", "alf4ch");
    if (isset($_POST['submit']))
    {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    }

    $result = mysqli_query ($db, "INSERT INTO queries(name,email,subject, message) VALUES ('$username','$email','$subject', '$message')");
    header("Location: contact.php");
?>