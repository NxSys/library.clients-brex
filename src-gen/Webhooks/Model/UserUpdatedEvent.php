<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Model;

class UserUpdatedEvent extends \ArrayObject
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
    protected $userId;
    /**
     * @var string
     */
    protected $companyId;
    /**
     * @var list<string>
     */
    protected $updatedAttributes;
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
    public function getUserId(): string
    {
        return $this->userId;
    }
    /**
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * @return string
     */
    public function getCompanyId(): string
    {
        return $this->companyId;
    }
    /**
     * @param string $companyId
     *
     * @return self
     */
    public function setCompanyId(string $companyId): self
    {
        $this->initialized['companyId'] = true;
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getUpdatedAttributes(): array
    {
        return $this->updatedAttributes;
    }
    /**
     * @param list<string> $updatedAttributes
     *
     * @return self
     */
    public function setUpdatedAttributes(array $updatedAttributes): self
    {
        $this->initialized['updatedAttributes'] = true;
        $this->updatedAttributes = $updatedAttributes;
        return $this;
    }
}