<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class BankConnectionCurrentBalance extends \ArrayObject
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
     * 
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     * 
     *
     * @var Money
     */
    protected $amount;
    /**
     * @var \DateTime
     */
    protected $asOfDate;
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
     * @return \DateTime
     */
    public function getAsOfDate(): \DateTime
    {
        return $this->asOfDate;
    }
    /**
     * @param \DateTime $asOfDate
     *
     * @return self
     */
    public function setAsOfDate(\DateTime $asOfDate): self
    {
        $this->initialized['asOfDate'] = true;
        $this->asOfDate = $asOfDate;
        return $this;
    }
}