<?php
$email = "conesco.3@gmail.com";

$name = htmlspecialchars($_POST['txtName']);
$user_email = htmlspecialchars($_POST['txtEmail']);
$msg = htmlspecialchars($_POST['txtComment']);

$email_message = "Name: $name \r\n Email: $user_email \r\n Message: $msg \r\n";
mail($email, 'Contact Us Message', $email_message);
header("location: ../index.html");
?>
