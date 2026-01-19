<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Model;

class ReferralActivatedEvent extends \ArrayObject
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
    protected $eventType;
    /**
     * @var string
     */
    protected $referralId;
    /**
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }
    /**
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * @return string
     */
    public function getReferralId(): string
    {
        return $this->referralId;
    }
    /**
     * @param string $referralId
     *
     * @return self
     */
    public function setReferralId(string $referralId): self
    {
        $this->initialized['referralId'] = true;
        $this->referralId = $referralId;
        return $this;
    }
}