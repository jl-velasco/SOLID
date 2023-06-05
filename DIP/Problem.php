<?php
declare(strict_types = 1);

class Mailer
{
    public function send(string $email, string $content): void
    {
        // send email
    }
}

class SendWelcomeMessage
{

    public function __construct(private readonly Mailer $mailer)
    {
    }

    public function sendWelcomeMessage(string $email): void
    {
        $this->mailer->send($email, 'Welcome to our website!');
    }
}
