<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class VendorDetailsResponse extends \ArrayObject
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
     * @var string
     */
    protected $paymentInstrumentId;
    /**
     * Vendor ID returned from `/vendors` endpoint
     *
     * @var string
     */
    protected $id;
    /**
     * Routing number of a bank account (or SWIFT/BIC code for international transfer).
     *
     * @var string|null
     */
    protected $routingNumber;
    /**
     * Account number of a bank account (or IBAN code for international transfer).
     *
     * @var string|null
     */
    protected $accountNumber;
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
     * @return string
     */
    public function getPaymentInstrumentId(): string
    {
        return $this->paymentInstrumentId;
    }
    /**
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
     * Vendor ID returned from `/vendors` endpoint
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Vendor ID returned from `/vendors` endpoint
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Routing number of a bank account (or SWIFT/BIC code for international transfer).
     *
     * @return string|null
     */
    public function getRoutingNumber(): ?string
    {
        return $this->routingNumber;
    }
    /**
     * Routing number of a bank account (or SWIFT/BIC code for international transfer).
     *
     * @param string|null $routingNumber
     *
     * @return self
     */
    public function setRoutingNumber(?string $routingNumber): self
    {
        $this->initialized['routingNumber'] = true;
        $this->routingNumber = $routingNumber;
        return $this;
    }
    /**
     * Account number of a bank account (or IBAN code for international transfer).
     *
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Account number of a bank account (or IBAN code for international transfer).
     *
     * @param string|null $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(?string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}