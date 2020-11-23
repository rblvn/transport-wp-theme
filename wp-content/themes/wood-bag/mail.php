<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'phpmailer/autoload.php';

$recepient = "zayvkiwb@yandex.ru"; //zayvkiwb@yandex.ru
$mailTitle = "Новая заявка с сайта \"Woodbag\"";

$_POST["phone"] = $_POST["phone"] ?? "";
$_POST["form-name"] = $_POST["form-name"] ?? "";
$_POST["page-name"] = $_POST["page-name"] ?? "";

$arr = [
	"Телефон" => trim($_POST["phone"]),
	"Форма" => trim($_POST["form-name"]),
	"Страница" => trim($_POST["page-name"])
];

$isExtraStyle = true;
$message = "<table cellpadding='8' style='width: 100%;border-collapse: separate;border-spacing: 2px;font-size: 16px;'>";

foreach ($arr as $key => $value) {
	$extraStyle = $isExtraStyle ? "background-color: #f2f2f2;" : "";
  if($value){
  	$message .= "
	  	<tr style='".$extraStyle."'>".
				"<td style='border: 1px solid #ddd;'>"."<b>".$key."</b>"."</td>".
				"<td style='border: 1px solid #ddd;'>".$value."</td>".
			"</tr>";
		$isExtraStyle = !$isExtraStyle;
  } else {
  	continue;
  }
}

$message .= "</table>";

$mailMessage = sendMail($recepient, $mailTitle, $message, false);
echo $mailMessage;

function sendMail($to, $subject, $body, $isAttachment){
	$mail = new PHPMailer;																							// Create a new PHPMailer instance
	$mail->CharSet = 'UTF-8';
	$mail->SMTPDebug = 0;                               							// Enable verbose debug output
	$mail->isSMTP();                                      							// Set mailer to use SMTP
	$mail->Host = 'ssl://smtp.gmail.com'; 							  							// Specify main and backup SMTP servers - ssl://smtp.yandex.ru
	$mail->SMTPAuth = true;                               							// Enable SMTP authentication
	$mail->Username = 'sugudushka@gmail.com';         									// SMTP username - smartsite1@yandex.ru
	$mail->Password = 'John1104';                  						// SMTP password - BEchJVtSb5uaZKJukX
	$mail->Port = 465;                                    							// TCP port to connect to
	$mail->setFrom("sugudushka@gmail.com", "Woodbag - логистика, таможня, закупки", true);	//Set who the message is to be sent from - smartsite1@yandex.ru
	//$mail->addReplyTo("webmailforsand@gmail.com", "Woodbag - логистика, таможня, закупки"); // - smartsite1@yandex.ru
	$mail->addAddress($to);																							//Set who the message is to be sent to

	$mail->Subject = $subject;
	$mail->isHTML(true);
	$mail->Body = $body;

	if($isAttachment){
		//$mail->addAttachment('docs/attachment.pdf');												//Attachment
	}

	if(!$mail->send()){
	  $response = "Mailer Error: " . $mail->ErrorInfo;
	}else{
	  $response = "success";
	}

	// Clear all addresses and attachments for next loop
  $mail->clearAddresses();
  $mail->clearAttachments();

	return $response;
}