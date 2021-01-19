<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
	$company = $_POST['company'];
	$message = $_POST['comment'];
	
    $from = 'fortuneindustriesindia.com'; 
    $to = 'fortunepkd@gmail.com'; 
    $subject = 'Email Inquiry';

   	$body = "
	From         : $name\n
	E-Mail       : $email\n
	Phone-Number : $phone \n
	Company Name : $company \n
	Message      : $message";

$mail_status = mail($to, $subject, $body, $from);

if ($mail_status) { ?>
 <script language="javascript" type="text/javascript">
  alert('Thank you for the message. We will contact you shortly.');
  window.location = 'index.html';
 </script>
<?php
}
else { ?>
 <script language="javascript" type="text/javascript">
  alert('Message sending failed. Please, send an email to anas@existors.com');
  window.location = 'contact_us.html';
 </script>
<?php
}
?>