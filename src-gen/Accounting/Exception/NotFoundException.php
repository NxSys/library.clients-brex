<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Exception;

class NotFoundException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 404);
    }
}