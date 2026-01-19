<?php

namespace NxSys\Library\Clients\Brex\API\Expenses\Exception;

class BadRequestException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 400);
    }
}