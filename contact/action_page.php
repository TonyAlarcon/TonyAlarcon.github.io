


<?php $name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];
$formcontent="From: $Name \n Message: $Message";
$recipient = "palarcon91@outlook.com";
$subject = "Contact Form";
$mailheader = "From: $Email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>