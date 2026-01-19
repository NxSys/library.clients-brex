<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Model;

class TransferFailedEvent extends TransferEvent
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
    protected $transferId;
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
    public function getTransferId(): string
    {
        return $this->transferId;
    }
    /**
     * @param string $transferId
     *
     * @return self
     */
    public function setTransferId(string $transferId): self
    {
        $this->initialized['transferId'] = true;
        $this->transferId = $transferId;
        return $this;
    }
}