<?php

//variaveis
$email = $_POST['email'];

$nome = $_POST['nome'];

$mensagem = $_POST['mensagem'];

$btn = $_POST['enviar'];

$assunto = "Contato pelo site LovelyDogs";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once ('vendor/autoload.php');

$mail = new PHPMailer(true);

if(isset($_POST['enviar'])){

   try {
      //Server settings
      $mail->isSMTP();                           
      $mail->Host = 'smtp.gmail.com';                    
      $mail->SMTPAuth  = true;                                 
      $mail->Username = 'lovelydogscontato@gmail.com';            
      $mail->Password = 'ppjqrrgteionnxqf';                   
      $mail->SMTPSecure=PHPMailer::ENCRYPTION_SMTPS;           
      $mail->Port = 465;       

      //Recipients
      $mail->setFrom($email,$nome);
      $mail->addAddress($email, 'Me'); 
      $mail->addReplyTo($email, $nome);

      //Content
      $mail->isHTML(true); 
      $mail->Subject = utf8_decode($assunto);
      $mail->Body = utf8_decode("Mensagem enviada através do site LovelyDogs, informações abaixo:<br><br>
      Nome: ". $nome."<br><br>
      E-mail: ". $email."<br><br>
      Mensagem:<br>".$mensagem);

      $mail->send();
      header("Location: index.html");
   } catch (Exception $e) {
      echo "E-mail não foi enviado.";
   }
} else{
   echo "Erro ao enviar e-mail. Tente novamente via formulário.";
}

?>