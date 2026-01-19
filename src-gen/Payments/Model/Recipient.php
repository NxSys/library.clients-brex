<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class Recipient extends \ArrayObject
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
     * Specifies the type of the recipient.
     * `ACCOUNT_ID` is the ID of a Brex Cash account.
     * `PAYMENT_INSTRUMENT_ID` is the ID of Payment Instrument of the receiving Brex account.
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $id;
    /**
     * Specifies the type of the recipient.
     * `ACCOUNT_ID` is the ID of a Brex Cash account.
     * `PAYMENT_INSTRUMENT_ID` is the ID of Payment Instrument of the receiving Brex account.
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * Specifies the type of the recipient. 
    `ACCOUNT_ID` is the ID of a Brex Cash account.
    `PAYMENT_INSTRUMENT_ID` is the ID of Payment Instrument of the receiving Brex account.
    
    *
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
}