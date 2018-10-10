<?php
	require_once("PHPMailer.php");
	require_once("SMTP.php");

	$email_admin = "dima@redder.pro";
	// $email_admin = "soc.taxi.35@gmail.com";

	$from = "“Сок Алоэ”";
	$email_from = "robot@taxi-chita.ru";
	$email_client = $_POST["email"];
	$send_pdf = $_POST["pdf"];

	$deafult = array(
		"name"=>"Имя",
		"phone"=>"Телефон",
		"email"=>"E-mail",
		"count"=>"Количество упаковок",
		"problem"=>"Описание проблемы"
	);

	$fields = array();

	if( count($_POST) ){

		foreach ($deafult  as $key => $value){
			if( isset($_POST[$key]) ){
				$fields[$value] = $_POST[$key];
			}
		}

		$i = 1;
		while( isset($_POST[''.$i]) ){
			$fields[$_POST[$i."-name"]] = $_POST[''.$i];
			$i++;
		}

		$subject = $_POST["subject"];

		$title = "Поступила заявка с сайта ".$from.":\n";

		$message = "<div><h3 style=\"color: #333;\">".$title."</h3>";

		foreach ($fields  as $key => $value){
			$message .= "<div><p><b>".$key.": </b>".$value."</p></div>";
		}
			
		$message .= "</div>";
		
		if (isset($send_pdf)) {
			$mail2 = new PHPMailer();
			$mail2->From = $email_from;
			$mail2->Subject = "Бесплатное руководство";
			$mail2->AddAddress($email_client);
			$mail2->IsHTML(true);
			$mail2->addAttachment("policy.pdf", "policy.pdf");
		}

		
		$mail = new PHPMailer();
		$mail->From = $email_from;
		$mail->FromName = $from;
		$mail->AddAddress($email_admin);
		$mail->IsHTML(true);
		$mail->Subject = $subject;
		$mail->Body = $message;	

		if ($mail->Send()){
			header("Location: thanks.html");
		}else{
			header("Location: index.html#error");
		}
	}
?>