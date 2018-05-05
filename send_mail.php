<?php
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

// Enter your email address below.
$to = 'princesspavilion@gmail.com';


$subject = Enquiry;

if($to) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$time = $_POST['time'];
	$event_type = $_POST['event_type'];
	$venue = $_POST['venue'];
	
	

	$fields = array(
		0 => array(
			'text' => 'Name',
			'val' => $_POST['name']
		),
		1 => array(
			'text' => 'Email',
			'val' => $_POST['email']
		),
		2 => array(
			'text' => 'Number',
			'val' => $_POST['number']
		),
		3 => array(
			'text' => 'Date',
			'val' => $_POST['time']
		),
		4 => array(
			'text' => 'Event Type',
			'val' => $_POST['event_type']
		),
		5 => array(
			'text' => 'Venue',
			'val' => $_POST['venue']
		)
		
	);

	$message = "";

	foreach($fields as $field) {
		$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
	}

	$headers = '';
	$headers .= 'From: ' . $name . ' <' . $email . '>' . "\r\n";
	$headers .= "Reply-To: " .  $email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

	if (mail($to, $subject, $message, $headers)){
		$arrResult = array ('response'=>'success');
		$message = "Thank you for applying to the Princes Pavilion ! Our team will go through your Enquiry and will get back to Soon";
		if (mail($email, $subject, $message, $headers)){
		header("Location: http://princesspavilion.in/contact.html?msg=success");
		die();}
	} else{
		$arrResult = array ('response'=>'error');
		header("Location: http://princesspavilion.in/contact.html?msg=error");
		die();
	}

	echo json_encode($arrResult);

} else {

	$arrResult = array ('response'=>'error');
	echo json_encode($arrResult);
	header("Location: http://princesspavilion.in/contact.html?msg=error");
		die();

}
?>
