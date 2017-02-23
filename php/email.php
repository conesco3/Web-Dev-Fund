<?php
$email = "conesco.3@gmail.com";

$name = htmlspecialchars($_POST['txtName']);
$people = htmlspecialchars($_POST['People']);
$date = htmlspecialchars($_POST['date']);
$msg = htmlspecialchars($_POST['Message']);

$email_message = "Name: $name \r\n Number of People: $people \r\n Date: $date \r\n Message: $msg \r\n";
mail($email, 'Booking', $email_message);
header("location: index.php");
?>
