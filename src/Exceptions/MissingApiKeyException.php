<?php

namespace SamuelNitsche\LaravelHetznerDns\Exceptions;

use Exception;

class MissingApiKeyException extends Exception
{
    public function __construct()
    {
        parent::__construct("Please configure your api key.");
    }
}
