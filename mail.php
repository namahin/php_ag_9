<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	// success message
	echo "Thank you for contacting us, $name. We will get back to you soon!";
} else {
	header('Location: contact.html');
	exit;
}