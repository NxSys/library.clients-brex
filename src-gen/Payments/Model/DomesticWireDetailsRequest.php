<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class DomesticWireDetailsRequest extends \ArrayObject
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
     * @var string
     */
    protected $type;
    /**
     * The routing number must follow proper format.
     *
     * @var string
     */
    protected $routingNumber;
    /**
     * @var string
     */
    protected $accountNumber;
    /**
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     *
     * @var Address
     */
    protected $address;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The routing number must follow proper format.
     *
     * @return string
     */
    public function getRoutingNumber(): string
    {
        return $this->routingNumber;
    }
    /**
     * The routing number must follow proper format.
     *
     * @param string $routingNumber
     *
     * @return self
     */
    public function setRoutingNumber(string $routingNumber): self
    {
        $this->initialized['routingNumber'] = true;
        $this->routingNumber = $routingNumber;
        return $this;
    }
    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }
    /**
     * @param string $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     *
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }
    /**
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     *
     * @param Address $address
     *
     * @return self
     */
    public function setAddress(Address $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}