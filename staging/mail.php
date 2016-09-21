<?php
// the message
$intro = "Hey Justin, \n\n";
$body = "This is a test\nI hope it works!";
$msg = $intro . $body;
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("harwoodjp@g.cofc.edu","pls work",$msg);
?>
