<?php

if((isset($_POST['email']) && !empty($_POST['email']))) {


	$name = addslashes($_POST['name']) ? utf8_decode;
	$email = addslashes($_POST['email']);
	$celular = addslashes($_POST['celular']);
	$message = addslashes($_POST['message']) utf8_decode;

	$to = "fragata@hotmail.com.br";
	$subject = "Formulário - Curriculo";
	$body = "Nome: ".$name. "\r\n".
			"E-mail: ".$email. "\r\n".
			"Celular: ".$celular. "\r\n".
			"Mensagem: ".$message;

	$header = "From: wilson.fragata@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

	if(mail($to,$subject,$body,$header)){
		echo("E-mail enviado com sucesso!");
	}else{
		echo("O E-mail não pôde ser enviado");
	}
}

?>