<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class MY_Email {

    function send($destinatario, $remetente, string $assunto, string $html)
    {

        if(
            $destinatario === null
            || $remetente === null
            || $assunto === null
            || $html === null
        )
        {

            return ['status'=>'error','title'=>'Ops...','message'=>'Não foi possível identificar os dados para envio do e-mail. Recarregue a página e tente novamente. Se persistir, entre em contato com o suporte.'];

        }

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {

            // Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;               //Enable verbose debug output
            $mail->isSMTP();                                        //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                   //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                               //Enable SMTP authentication
            $mail->Username   = 'retornoautomatico@marjan.com.br';  //SMTP username
            $mail->Password   = 'Mrj@7093';                         //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        //Enable implicit TLS encryption
            $mail->Port       = 465;                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->CharSet    = 'UTF-8';

            //Recipients
            $mail->setFrom('romaneio.digital@marjanfarma.com.br', 'Romaneio Digital');

            // VERIFICA SE TROUXE NOME E E-MAIL OU APENAS E-MAIL
            if(is_array($destinatario))
            {
                $mail->addAddress($destinatario['email'], $destinatario['nome']);
            } else {
                $mail->addAddress($destinatario);
            }

            // VERIFICA SE TROUXE NOME E E-MAIL OU APENAS E-MAIL
            if(is_array($remetente))
            {
                $mail->addReplyTo($remetente['email'], $remetente['nome']);
            } else {
                $mail->addReplyTo($remetente);
            }

            // PARA DEFINIR CÓPIA OCULTA
            // $mail->addBcc('weslley.cruz@marjanfarma.com.br');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $assunto;
            $mail->Body    = $html;
            $mail->AltBody = strip_tags($html);

            $mail->send();
            
            return ['status'=>'success','title'=>'Pronto!','message'=>'Mensagem enviada com sucesso.'];

        } catch (Exception $e) {
            
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return ['status'=>'error','title'=>'Ops...','message'=>'Ocorreu um problema no envio do e-mail. Recarregue a página e tente novamente. Se persistir, entre em contato com o suporte.'];

        }

    }

}