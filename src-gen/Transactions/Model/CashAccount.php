<?php

namespace NxSys\Library\Clients\Brex\API\Transactions\Model;

class CashAccount extends \ArrayObject
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
     * ID of the cash account
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $status;
    /**
     * 
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     * 
     *
     * @var Money
     */
    protected $currentBalance;
    /**
     * 
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     * 
     *
     * @var Money
     */
    protected $availableBalance;
    /**
     * @var string
     */
    protected $accountNumber;
    /**
     * @var string
     */
    protected $routingNumber;
    /**
     * Whether or not this account is the primary account. There will always be only one primary account.
     *
     * @var bool
     */
    protected $primary;
    /**
     * ID of the cash account
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of the cash account
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
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
    public function getCurrentBalance(): Money
    {
        return $this->currentBalance;
    }
    /**
    * 
    Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
    of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
    
    *
    * @param Money $currentBalance
    *
    * @return self
    */
    public function setCurrentBalance(Money $currentBalance): self
    {
        $this->initialized['currentBalance'] = true;
        $this->currentBalance = $currentBalance;
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
    public function getAvailableBalance(): Money
    {
        return $this->availableBalance;
    }
    /**
    * 
    Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
    of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
    
    *
    * @param Money $availableBalance
    *
    * @return self
    */
    public function setAvailableBalance(Money $availableBalance): self
    {
        $this->initialized['availableBalance'] = true;
        $this->availableBalance = $availableBalance;
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
     * Whether or not this account is the primary account. There will always be only one primary account.
     *
     * @return bool
     */
    public function getPrimary(): bool
    {
        return $this->primary;
    }
    /**
     * Whether or not this account is the primary account. There will always be only one primary account.
     *
     * @param bool $primary
     *
     * @return self
     */
    public function setPrimary(bool $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;
        return $this;
    }
}