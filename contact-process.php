<?php

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$request = trim($_POST["request"]);

if ($name == "" OR $email == "" OR $request == "") {
	echo "Please give us your name and email";
	exit;
}

$email_body = "";
$email_body = $email_body . "Name: " . $name . "\n";
$email_body = $email_body . "Email: " . $email . "\n";
$email_body = $email_body . "Request or order: " . $request;
echo $email_body;

// Send email

header("Location: contact-thanks.php")

?>
