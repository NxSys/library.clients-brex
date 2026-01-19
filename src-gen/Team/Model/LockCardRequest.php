<?php

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class LockCardRequest extends \ArrayObject
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
     * Description for locking a card
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     * Reason for card termination.
     * 
     *
     * @var string
     */
    protected $reason;
    /**
     * Description for locking a card
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Description for locking a card
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     * Reason for card termination.
     * 
     *
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
    * 
    Reason for card termination.
    
    *
    * @param string $reason
    *
    * @return self
    */
    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
}