<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Exception;

class ForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 403);
    }
}