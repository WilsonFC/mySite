<?php
date_default_timezone_set('America/Manaus');

require_once('PHPMailer.php');
require_once('SMTP.php');
require_once('Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if((isset($_POST['name']) && !empty(trim($_POST['name']))) && (isset($_POST['email']) && !empty(trim($_POST['name']))) && (isset($_POST['celular']) && !empty(trim($_POST['celular']))) && (isset($_POST['message']) && !empty(trim($_POST['message'])))) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$celular = $_POST['celular'];
	$message = $_POST['message'];

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'wilson.fragata@gmail.com';
	$mail->Password = 'pai_francisco';
	$mail->Port = 587;

	$mail->setFrom('wilson.fragata@gmail.com');
	$mail->addAddress('wilson.fragata@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = Site - Currículo;
	$mail->Body = "Nome: {$name}<br>
				   Email: {$email}<br>
				   Celular: {$celular}<br>
				   Mensagem: {$message}<br>

	if($mail->send()) {
		echo 'Email enviado com sucesso.';
		} else {
			echo 'Email não enviado.';
		}else{
		echo 'Mensagem não enviada: Gentileza, preencher todos os campos.';
	}

	?>