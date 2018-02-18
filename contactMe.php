<?php

$field_name = $_POST['name'];
$field_email = $_POST['email'];
//$field_name = $_POST['subject']
$field_message = $_POST['message'];

$mail_to = 'djsullivan@wpi.edu';
$subject = 'Message from website: ' .$field_name;

$body_message =  'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Message has been sent! I will get back to you soon.');
		window.location = 'contact_page.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Error sending. E-Mail me at djsullivan@wpi.edu');
		window.location = 'contact_page.html';
	</script>
<?php
}
?>