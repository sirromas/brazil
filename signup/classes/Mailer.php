<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/custom/class.pdo.database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/custom/signup/mailer/vendor/PHPMailerAutoload.php';

class Mailer {

    public $mail_smtp_host = 'ead.iprovida.org.br';
    public $mail_smtp_port = 587;
    public $mail_smtp_user = 'info@ead.iprovida.org.br';
    public $mail_smtp_pwd = 'aK6SKymc';
    public $db;

    function __construct() {
        $this->db = new pdo_db();
    }

    function send_signup_confirmation($user) {

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = $this->mail_smtp_host;
        $mail->SMTPAuth = true;
        $mail->Username = $this->mail_smtp_user;
        $mail->Password = $this->mail_smtp_pwd;
        $mail->SMTPSecure = 'tls';
        $mail->Port = $this->mail_smtp_port;

        $message = "";
        $message.="<html>";
        $message.="<body><br><br>";
        $message.="<table align='center'>";

        $message.="<tr>";
        $message.="<td style='padding:15px;'>Dear $user->first_name $user->lastname!</td>";
        $message.="</tr>";

        $message.="<tr>";
        $message.="<td style='padding:15px;'>Thank you for signup!</td>";
        $message.="</tr>";

        $message.="<tr>";
        $message.="<td style='padding:15px;'>Your username:</td><td style='padding:15px;'>$user->email</td>";
        $message.="</tr>";

        $message.="<tr>";
        $message.="<td style='padding:15px;'>Your password:</td><td style='padding:15px;'>$user->pwd</td>";
        $message.="</tr>";

        $message.="<tr>";
        $message.="<td style='padding:15px;'>Please be aware your access to course will be restricted untill we reveive payment from you</td>";
        $message.="</tr>";

        $message.="<tr>";
        $message.="<td style='padding:15px;'>Best regards, <p>IPróVida team</td>";
        $message.="</tr>";

        $message.="</table>";
        $message.="</body>";
        $message.="</html>";

        $mail->setFrom($this->mail_smtp_user, 'IPróVida');

        $mail->addAddress($user->email);
        //$mail->addAddress('sirromas@gmail.com');
        $mail->addReplyTo($this->mail_smtp_user, 'IPróVida');
        $mail->isHTML(true);
        $mail->Subject = 'Signup confirmation';
        $mail->Body = $message;
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } // end if !$mail->send()        
        else {
            //echo 'Message has been sent to ' . $recipient;
        }
    }

    function send_payment_confirmation_message($user) {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = $this->mail_smtp_host;
        $mail->SMTPAuth = true;
        $mail->Username = $this->mail_smtp_user;
        $mail->Password = $this->mail_smtp_pwd;
        $mail->SMTPSecure = 'tls';
        $mail->Port = $this->mail_smtp_port;

        $message = "";
        $message.="<html>";
        $message.="<body><br><br>";

        $message.="<table align='center'>";

        $message.="<tr>";
        $message.="<td style='padding:15px;' align='center' colspan='2'><img src='http://ipvtransito.com.br/images/logo.png'></td>";
        $message.="</tr>";

        $message.="<tr>";
        $message.="<td style='padding:15px;' align='center' colspan='2'>Prezado aluno,</td>";
        $message.="</tr>";

        $message.="<tr>";
        $message.="<td style='padding:15px;' align='center' colspan='2'>Você acaba de se matricular no curso de Reciclagem para Condutores Infratores.
                                Para acessar o curso, <a href='http://ead.iprovida.org.br/' target='_blank'>clique aqui</a>.</td>";
        $message.="</tr>";

        /*
          $message.="<tr>";
          $message.="<td style='padding:15px;' align='center'>We received your payment of $user->amount BRL. Thank you!</td>";
          $message.="</tr>";

          $message.="<tr>";
          $message.="<td style='padding:15px;' align='center'>You have now full access to $user->coursename</td>";
          $message.="</tr>";
         */

        $message.="<tr>";
        $message.="<td style='padding:15px;' >Seu usuário:</td><td style='padding:15px;'>$user->cpf</td>";
        $message.="</tr>";

        $message.="<tr>";
        $message.="<td style='padding:15px;' >Sua senha:</td><td style='padding:15px;'>$user->pwd</td>";
        $message.="</tr>";

        $message.="<tr>";
        $message.="<td style='padding:15px;'>Atenciosamente,<br>IPróVida.</td>";
        $message.="</tr>";

        $message.="</table>";
        $message.="</body>";
        $message.="</html>";

        $value = 'IPV';
        $mail->setFrom($this->mail_smtp_user, $value);

        $mail->addAddress($user->email);
        //$mail->addAddress('sirromas@gmail.com');
        $mail->addReplyTo($this->mail_smtp_user, htmlentities(utf8_encode($value), 0, "UTF-8"));
        $mail->isHTML(true);
        $mail->Subject = 'Payment confirmation';
        $mail->Body = $message;
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } // end if !$mail->send()        
        else {
            //echo 'Message has been sent to ' . $recipient;
        }
    }

}
