<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class TransferCounterparty extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
}