<?php
date_default_timezone_set('America/Sao_Paulo')
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome= insset($_POST['nome']) ? $_POST['nome'] : 'Não Informado';
$email= insset($_POST['Email']) ? $_POST['Email'] : 'Não Informado';
$mensagem= insset($_POST['mensagem']) ? $_POST['mensagems'] : 'Não Informado';
$data= date('d/a/Y H:i:s');

if ($email && $mensagem) {

  $mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'verenicesalao@gmail.com';
	$mail->Password = 'ramon123';
	$mail->Port = 587;

	$mail->setFrom('verenicesalao@gmail.com');
	$mail->addAddress('verenicesalao@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = 'Vere Receitas';
	$mail->Body = "Nome: {$nome}<br>
                Email: {$email}<br>
                Mensagem: {$mensagem}<br>
                Data/hora: {$data}";

	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} else {
  echo 'Email não enviado: informar o email e a mensagem.';
}
