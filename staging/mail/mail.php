<?php
$name = htmlspecialchars($_POST["name"]);
$message = htmlspecialchars($_POST["message"]);
// the message
$intro = "Hello, <br><br>";
$outro = "<br><br>From: $name";
$send = $intro . $message . $outro;

// use wordwrap() if lines are longer than 70 characters
$send = wordwrap($send,70);

echo $send;
// send email
mail("harwoodjp@g.cofc.edu","pls work",$send);


