<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class BankDetails extends \ArrayObject
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
     * The name of the bank
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $type;
    /**
     * 
     * The name of the bank
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
    * 
    The name of the bank
    
    *
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
}