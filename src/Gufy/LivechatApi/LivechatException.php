<?php

namespace Gufy\LivechatApi;

use Exception;

class LivechatException extends Exception
{
    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}