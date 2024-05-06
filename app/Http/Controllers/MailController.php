<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class MailController extends Controller
{
    public function sentMail(Request $request)
    {
        // MAIL INIT
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = false;
            $mail->isSMTP();
            $mail->Host       = 'smtp.zoho.in';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'admin@scholarsmate.co.in';
            $mail->Password   = env("ZOHO_MAIL_PASSWORD");
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;
            //++++++++++++++++++++++++++++++++++++++++++++++
            //Recipients
            //++++++++++++++++++++++++++++++++++++++++++++++
            $mail->setFrom('admin@scholarsmate.co.in', 'Scholars Mate');
            $mail->addAddress('ak70xm@gmail.com', 'user Email');
            // $mail->addAddress('test@example.com');
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
            //++++++++++++++++++++++++++++++++++++++++++++++
            //Attachments
            //++++++++++++++++++++++++++++++++++++++++++++++
            // $mail->addAttachment('/var/tmp/file.tar.gz');
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');
            //++++++++++++++++++++++++++++++++++++++++++++++
            //Content
            //++++++++++++++++++++++++++++++++++++++++++++++
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            //++++++++++++++++++++++++++++++++++++++++++++++
            $mail->send();
            return Response::json('Message has been sent');
        } catch (Exception $e) {
            return Response::json("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }
}
