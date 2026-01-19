<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class CounterPartyBankDetails extends \ArrayObject
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
     * 
     * The financial account id: Can be found from the [List linked accounts](/openapi/payments_api/#operation/listLinkedAccounts) endpoint
     * 
     *
     * @var string
     */
    protected $id;
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
     * 
     * The financial account id: Can be found from the [List linked accounts](/openapi/payments_api/#operation/listLinkedAccounts) endpoint
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
    * 
    The financial account id: Can be found from the [List linked accounts](/openapi/payments_api/#operation/listLinkedAccounts) endpoint
    
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
}