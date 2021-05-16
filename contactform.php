<?php
if (isset($_POST['submit'])) {
$name = trim($_POST['username']);
$tema = trim($_POST['tema']);
$nrtel = trim($_POST['nrtel']);
$email = trim($_POST['email']);
$mesazhi = trim($_POST['mesazhi']);
$mymail = "melisastojkaj@hotmail.com";
$header = "From: " . $email;
$message2 = "You have received an email from " . $name . ". \n\n" . $mesazhi;
mail($mymail, $tema, $message2, $header);
header("Location: contact.php?mailsend");
}

 ?>
