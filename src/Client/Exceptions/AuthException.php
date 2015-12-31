<?php

namespace LoopbackSDKPHP\Client\Exceptions;

use GuzzleHttp\Psr7\Response;
use RuntimeException;

class AuthException extends RuntimeException
{
    public static function make(Response $response)
    {
        return new AuthException(sprintf("Auth failed with code %s", $response->getStatusCode()));
    }
}