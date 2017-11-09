<?php

namespace Classes\Util;

class Mail implements MailInterface
{
    //Método de Envio de E-mails:
    public static function sendMail($to, $subject, $message) {
        //Cabeçalhos (Headers) do E-mail:
        $headers= 'From: <Minha Loja> jefferrson.frade@gmail.com' . "\r\n";
        $headers.= 'Reply-To: jefferrson.frade@gmail.com' . "\r\n" . $headers.= 'X-Mailer: PHP/'.phpversion();

        //Retorno do Envio do E-mail:
        return mail($to, $subject, $message, $headers);
    }
}
