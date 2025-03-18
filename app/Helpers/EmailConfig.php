<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;

class EmailConfig
{
    static function config($name, $mensaje): PHPMailer
    {
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'mail.draadrianapezo.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@draadrianapezo.com';
        $mail->Password = 'adrianapezo2025#';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->Subject = '' . $name . ', ' . $mensaje;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('info@draadrianapezo.com', 'Adriana Pezo');
        return $mail;
    }
}
