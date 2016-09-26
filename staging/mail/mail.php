<?php
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
// the message
$from = "From: $name \nEmail: $email \n\n";
$send = $from . $message;

// use wordwrap() if lines are longer than 70 characters
$send = wordwrap($send,70);

// send email
mail("speedy3phase@yahoo.com","You have a message!",$send);
mail("harwoodjp@g.cofc.edu","You have a message!",$send);
?>
<script>window.location = "../../thankyou.php"; </script>


