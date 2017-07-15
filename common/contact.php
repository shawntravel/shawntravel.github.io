<?php
$field_name = $_POST['name'];
$field_email = $_POST['mail'];
$field_phone = $_POST['phone'];
$field_country = $_POST['country'];
$field_subject = $_POST['subject'];
$field_message = $_POST['message'];

if (preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$field_email)) {

$mail_to = 'shawnliau1026@gmail.com';
$subject = 'Message from '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'Email: '.$field_email."\n";
$body_message .= 'Contact No.: '.$field_phone."\n";
$body_message .= 'Country: '.$field_country."\n";
$body_message .= 'Subject: '.$field_subject."\n";
$body_message .= 'Message: '."\n".$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Your message has been sent!');
		window.location = 'home.html';
	</script>
<?php
}}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Invalid email address');
		window.location = 'contact.html';
	</script>
<?php
}
?>