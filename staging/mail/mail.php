<?php
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
// the message
$from = "From: $name \n Email: $email \n\n";
$send = $from . $message;

// use wordwrap() if lines are longer than 70 characters
$send = wordwrap($send,70);

echo $send;
// send email
mail("harwoodjp@g.cofc.edu","You have a message!",$send);


