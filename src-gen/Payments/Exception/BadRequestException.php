<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Exception;

class BadRequestException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 400);
    }
}