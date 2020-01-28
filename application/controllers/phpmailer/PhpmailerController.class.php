<?php 

/* require '../www/libs/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer; */

class PhpmailerController{
	  public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();
    
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
       /*  $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '1a2b3c4d5e6f7g'; 
        $mail->Password = "";
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2525;

        $mail->setFrom('info@mailtrap.io', 'Mailtrap');
        $mail->addReplyTo('info@mailtrap.io', 'Mailtrap');
        $mail->addAddress('recipient1@mailtrap.io', 'Tim'); 
        $mail->addCC('cc1@example.com', 'Elena');
        $mail->addBCC('bcc1@example.com', 'Alex');

        $mail->Subject = 'Test Email via Mailtrap SMTP using PHPMailer';

        $mail->isHTML(true);

        $mailContent = "<h1>Send HTML Email using SMTP in PHP</h1>
            <p>This is a test email I’m sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;

        $mail->msgHTML(file_get_contents('contents.html'), __DIR__);

        try {
            $mail->send();
            echo "Message sent to: ({$user['email']}) {$mail->ErrorInfo}\n";
        } catch (Exception $e) {
            echo "Mailer Error ({$user['email']}) {$mail->ErrorInfo}\n";
        } */

        $http->redirectTo("/phpmailer"); 
    	 	
    }
}



?>
