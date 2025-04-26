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
        $mail->Host = 'mail.baigorreagroup.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@baigorreagroup.com';
        $mail->Password = 'info2025#';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->Subject = '' . $name . ', ' . $mensaje;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('info@baigorreagroup.com', 'Baigorrea Group');
        return $mail;
    }
}
