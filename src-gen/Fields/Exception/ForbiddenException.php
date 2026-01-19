<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Exception;

class ForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 403);
    }
}