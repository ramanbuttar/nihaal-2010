<?php
$name = $_POST["name"];
$comments = $_POST["comments"];

$to = "sfussa@gmail.com";
$subject = "Nihaal 2010 - Feedback";
$message = "Name: " . $name . "\n";
$message .= "Comments: " . $comments;
$headers = "From: Nihaal 2010 <website@nihaal.org>"; 

if (((strlen($name)) > 0) && ((strlen($comments)) > 0)) {
	if (mail($to, $subject, $message, $headers)) {
		header( 'Location: index.html' ) ;
	} else {
		print "Error in sending feedback. Mail could not be sent.";
	}
} else {
		print "Error in sending feedback. Blank Name and Comment.";
}
?>