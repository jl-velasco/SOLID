<?php
declare(strict_types = 1);

interface Mailer
{
    public function send();
}

class SmtpMailer implements Mailer
{
    public function send()
    {
        // send email
    }
}

class SendGridMailer implements Mailer
{
    public function send()
    {
        // send email
    }
}

class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send(string $email): void
    {
        $this->mailer->send($email, 'Welcome to our website!');
    }
}