<?php

namespace NxSys\Library\Clients\Brex\API\Transactions\Exception;

class UnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 401);
    }
}