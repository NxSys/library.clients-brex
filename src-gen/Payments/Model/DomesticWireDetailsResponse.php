<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class DomesticWireDetailsResponse extends \ArrayObject
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
     * Payment Instrument ID that can be passed to the /transfers endpoint to trigger a transfer.
     * The type of the payment instrument dictates the method.
     * 
     *
     * @var string
     */
    protected $paymentInstrumentId;
    /**
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
     * Payment Instrument ID that can be passed to the /transfers endpoint to trigger a transfer.
     * The type of the payment instrument dictates the method.
     * 
     *
     * @return string
     */
    public function getPaymentInstrumentId(): string
    {
        return $this->paymentInstrumentId;
    }
    /**
    * Payment Instrument ID that can be passed to the /transfers endpoint to trigger a transfer.
    The type of the payment instrument dictates the method.
    
    *
    * @param string $paymentInstrumentId
    *
    * @return self
    */
    public function setPaymentInstrumentId(string $paymentInstrumentId): self
    {
        $this->initialized['paymentInstrumentId'] = true;
        $this->paymentInstrumentId = $paymentInstrumentId;
        return $this;
    }
    /**
     * @return string
     */
    public function getRoutingNumber(): string
    {
        return $this->routingNumber;
    }
    /**
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