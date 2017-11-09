<?php

namespace Classes\Util;

interface MailInterface
{
    //Método de Envio de E-mails:
    public static function sendMail($to, $subject, $message);
}
