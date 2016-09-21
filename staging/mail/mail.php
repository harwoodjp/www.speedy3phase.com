<?php
$name = htmlspecialchars($_POST["name"]);
$message = htmlspecialchars($_POST["message"]);
// the message
$intro = "Hello, \n\n";
$outro = "\n\n From: $name";
$send = $intro . $message . $outro;

// use wordwrap() if lines are longer than 70 characters
$send = wordwrap($send,70);

echo $send;
// send email
mail("harwoodjp@g.cofc.edu","You have a message!",$send);


