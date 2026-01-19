<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class BrexCashDetails extends \ArrayObject
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
     * ID of the Brex Cash Account: Can be found from the [List cash accounts](/openapi/transactions_api/#operation/listAccounts) endpoint
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
     * ID of the Brex Cash Account: Can be found from the [List cash accounts](/openapi/transactions_api/#operation/listAccounts) endpoint
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
    ID of the Brex Cash Account: Can be found from the [List cash accounts](/openapi/transactions_api/#operation/listAccounts) endpoint
    
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