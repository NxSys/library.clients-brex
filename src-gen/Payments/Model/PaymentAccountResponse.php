<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class PaymentAccountResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var array<string, mixed>
     */
    protected $details;
    /**
     * @return array<string, mixed>
     */
    public function getDetails(): iterable
    {
        return $this->details;
    }
    /**
     * @param array<string, mixed> $details
     *
     * @return self
     */
    public function setDetails(iterable $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
}