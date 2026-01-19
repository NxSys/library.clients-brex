<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class CreateTransferRequest extends \ArrayObject
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
     * Counterparty Details for the transfer
     *
     * @var array<string, mixed>
     */
    protected $counterparty;
    /**
     * 
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     * 
     *
     * @var Money
     */
    protected $amount;
    /**
     * Description of the transfer for internal use. Not exposed externally.
     *
     * @var string
     */
    protected $description;
    /**
     * External memo for the transfer. `Payment Instructions` for Wires and the `Entry Description` for ACH payments.
     * Must be at most 90 characters for `ACH` and `WIRE` transactions
     * and at most 40 characters for `CHEQUES`
     * 
     *
     * @var string
     */
    protected $externalMemo;
    /**
     * Originating account details for the transfer
     *
     * @var array<string, mixed>
     */
    protected $originatingAccount;
    /**
     * @var string
     */
    protected $approvalType;
    /**
     * Counterparty Details for the transfer
     *
     * @return array<string, mixed>
     */
    public function getCounterparty(): iterable
    {
        return $this->counterparty;
    }
    /**
     * Counterparty Details for the transfer
     *
     * @param array<string, mixed> $counterparty
     *
     * @return self
     */
    public function setCounterparty(iterable $counterparty): self
    {
        $this->initialized['counterparty'] = true;
        $this->counterparty = $counterparty;
        return $this;
    }
    /**
     * 
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     * 
     *
     * @return Money
     */
    public function getAmount(): Money
    {
        return $this->amount;
    }
    /**
    * 
    Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
    of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
    
    *
    * @param Money $amount
    *
    * @return self
    */
    public function setAmount(Money $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Description of the transfer for internal use. Not exposed externally.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the transfer for internal use. Not exposed externally.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * External memo for the transfer. `Payment Instructions` for Wires and the `Entry Description` for ACH payments.
     * Must be at most 90 characters for `ACH` and `WIRE` transactions
     * and at most 40 characters for `CHEQUES`
     * 
     *
     * @return string
     */
    public function getExternalMemo(): string
    {
        return $this->externalMemo;
    }
    /**
    * External memo for the transfer. `Payment Instructions` for Wires and the `Entry Description` for ACH payments. 
    Must be at most 90 characters for `ACH` and `WIRE` transactions
    and at most 40 characters for `CHEQUES`
    
    *
    * @param string $externalMemo
    *
    * @return self
    */
    public function setExternalMemo(string $externalMemo): self
    {
        $this->initialized['externalMemo'] = true;
        $this->externalMemo = $externalMemo;
        return $this;
    }
    /**
     * Originating account details for the transfer
     *
     * @return array<string, mixed>
     */
    public function getOriginatingAccount(): iterable
    {
        return $this->originatingAccount;
    }
    /**
     * Originating account details for the transfer
     *
     * @param array<string, mixed> $originatingAccount
     *
     * @return self
     */
    public function setOriginatingAccount(iterable $originatingAccount): self
    {
        $this->initialized['originatingAccount'] = true;
        $this->originatingAccount = $originatingAccount;
        return $this;
    }
    /**
     * @return string
     */
    public function getApprovalType(): string
    {
        return $this->approvalType;
    }
    /**
     * @param string $approvalType
     *
     * @return self
     */
    public function setApprovalType(string $approvalType): self
    {
        $this->initialized['approvalType'] = true;
        $this->approvalType = $approvalType;
        return $this;
    }
}