<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {


$name = $_POST["name"];


$email = $_POST["email"];


$subject = $_POST["subject"];


$to = "elvis4real28.com";


$headers = "From: $email";


$message = "Name: $name\n\nEmail: $email\n\nSubject: $subject";


mail($to, $subject, $message, $headers);


}


?>

