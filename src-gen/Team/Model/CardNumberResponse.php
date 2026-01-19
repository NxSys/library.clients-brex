<?php

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class CardNumberResponse extends \ArrayObject
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
    protected $id;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var string
     */
    protected $cvv;
    /**
     * 
     * Card expiration year and month. Cards expire on the last day of the expiration month.
     * 
     * The expiration date is in UTC for cards starting with 555671, 428803 and 485932.
     * And the expiration date is in PST for cards starting with 511572.
     * 
     *
     * @var CardExpiration
     */
    protected $expirationDate;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * @return string
     */
    public function getCvv(): string
    {
        return $this->cvv;
    }
    /**
     * @param string $cvv
     *
     * @return self
     */
    public function setCvv(string $cvv): self
    {
        $this->initialized['cvv'] = true;
        $this->cvv = $cvv;
        return $this;
    }
    /**
     * 
     * Card expiration year and month. Cards expire on the last day of the expiration month.
     * 
     * The expiration date is in UTC for cards starting with 555671, 428803 and 485932.
     * And the expiration date is in PST for cards starting with 511572.
     * 
     *
     * @return CardExpiration
     */
    public function getExpirationDate(): CardExpiration
    {
        return $this->expirationDate;
    }
    /**
    * 
    Card expiration year and month. Cards expire on the last day of the expiration month.
    
    The expiration date is in UTC for cards starting with 555671, 428803 and 485932.
    And the expiration date is in PST for cards starting with 511572.
    
    *
    * @param CardExpiration $expirationDate
    *
    * @return self
    */
    public function setExpirationDate(CardExpiration $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
}