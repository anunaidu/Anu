<?php 
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){ 
$name = $_POST['name']; 
$email = $_POST['email']; 
$subject = $_POST['subject']; 
$message = $_POST['message']; 
$sent = mail('mahi.naidu770@gmail.com', $subject, $message, 'From: '.$name.'<'.$email.'>'); 
if($sent){ 
echo 'Mail Sent Successfully.'; 
} else { 
echo 'There Was An Error While Sending Mail.'; 
} 
} else { 
echo 'One or More Required Fields Were Missing'; 
}
