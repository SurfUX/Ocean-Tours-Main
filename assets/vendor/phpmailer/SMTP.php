<?php

namespace PHPMailer\PHPMailer;

class SMTP
{
    const VERSION = '6.9.1';

    const CRLF = "\r\n";

    const DEFAULT_PORT = 25;

    const MAX_LINE_LENGTH = 998;

    const DEBUG_OFF = 0;
    const DEBUG_CLIENT = 1;
    const DEBUG_SERVER = 2;
    const DEBUG_CONNECTION = 3;
    const DEBUG_LOWLEVEL = 4;

    public $do_debug = self::DEBUG_OFF;
    public $Debugoutput = 'echo';
    public $Timeout = 300;
    public $Timelimit = 300;
    public $smtp_conn;
    public $error = [];
    public $helo_rply;
    public $server_caps;
    public $last_reply;

    public function __construct()
    {
    }

    public function connect($host, $port = null, $timeout = 30, $options = [])
    {
        if (null === $port) {
            $port = self::DEFAULT_PORT;
        }

        $this->smtp_conn = fsockopen(
            $host,
            $port,
            $errno,
            $errstr,
            $timeout
        );

        if (!$this->smtp_conn) {
            $this->error = ['error' => "Failed to connect to server"];
            return false;
        }

        return true;
    }

    public function hello($host = '')
    {
        return true;
    }

    public function quit()
    {
        return true;
    }

    public function close()
    {
        if (is_resource($this->smtp_conn)) {
            fclose($this->smtp_conn);
        }
    }
}