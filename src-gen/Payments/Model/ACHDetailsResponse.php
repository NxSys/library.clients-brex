<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class ACHDetailsResponse extends \ArrayObject
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
     * @var string
     */
    protected $accountType;
    /**
     * @var string
     */
    protected $accountClass;
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
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }
    /**
     * @param string $accountType
     *
     * @return self
     */
    public function setAccountType(string $accountType): self
    {
        $this->initialized['accountType'] = true;
        $this->accountType = $accountType;
        return $this;
    }
    /**
     * @return string
     */
    public function getAccountClass(): string
    {
        return $this->accountClass;
    }
    /**
     * @param string $accountClass
     *
     * @return self
     */
    public function setAccountClass(string $accountClass): self
    {
        $this->initialized['accountClass'] = true;
        $this->accountClass = $accountClass;
        return $this;
    }
}