<?php

class NotificationSender
{
    public function send($type, $message)
    {
        if ($type === 'email') {
            echo "Enviando email: $message\n";
        } elseif ($type === 'sms') {
            echo "Enviando SMS: $message\n";
        } else {
            echo "Tipo de notificación no soportado.\n";
        }
    }
}

// Uso
$sender = new NotificationSender();
$sender->send('email', '¡Hola desde email!');
$sender->send('sms', '¡Hola desde SMS!');