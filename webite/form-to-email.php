<?php 
if (isset($_POST['send_message_btn'])) {
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $msg = $_POST['Message'];
  // Content-Type helps email client to parse file as HTML 
  // therefore retaining styles
  $to = "raroseanil@gmail.com,support@pavithrajewellery.com";
$email_subject = "New Form submission";
 $headers = "From: $email \r\n";
$email_body = "You have received a new message from the user $name.\nHere is the message:\n $msg";
                            
mail($to,$email_subject,$email_body,$headers);
}
header("Location:index.html");
?>

