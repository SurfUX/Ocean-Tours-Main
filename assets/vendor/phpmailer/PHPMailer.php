<?php

namespace PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

class PHPMailer
{
    const ENCRYPTION_STARTTLS = 'tls';

    public $isSMTP = false;
    public $Host;
    public $SMTPAuth = false;
    public $Username;
    public $Password;
    public $SMTPSecure;
    public $Port;
    public $From;
    public $FromName;
    public $Subject;
    public $Body;
    public $AltBody;
    public $isHTML = false;
    public $to = [];
    public $ReplyTo = [];

    public function isSMTP()
    {
        $this->isSMTP = true;
    }

    public function setFrom($address, $name = '')
    {
        $this->From = $address;
        $this->FromName = $name;
    }

    public function addAddress($address)
    {
        $this->to[] = $address;
    }

    public function addReplyTo($address, $name = '')
    {
        $this->ReplyTo = [$address, $name];
    }

    public function isHTML($bool = true)
    {
        $this->isHTML = $bool;
    }

    public function send()
    {
        if (!$this->Host || !$this->Username || !$this->Password) {
            throw new Exception('SMTP configuration missing');
        }

        return mail(
            implode(',', $this->to),
            $this->Subject,
            $this->Body,
            "From: {$this->FromName} <{$this->From}>\r\nContent-Type: text/html; charset=UTF-8"
        );
    }
}