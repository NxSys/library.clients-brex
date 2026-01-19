<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class Field extends \ArrayObject
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
     * The internal Brex ID of the field
     *
     * @var string
     */
    protected $brexId;
    /**
     * The name of the field
     *
     * @var string|null
     */
    protected $name;
    /**
     * Remote/external ID of custom field from external system (e.g. ERP or HRIS system)
     *
     * @var string|null
     */
    protected $remoteId;
    /**
     * The last updated timestamp of the field
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Indicates if the field is disabled
     *
     * @var bool
     */
    protected $isDisabled;
    /**
     * @var string|null
     */
    protected $group;
    /**
     * The internal Brex ID of the field
     *
     * @return string
     */
    public function getBrexId(): string
    {
        return $this->brexId;
    }
    /**
     * The internal Brex ID of the field
     *
     * @param string $brexId
     *
     * @return self
     */
    public function setBrexId(string $brexId): self
    {
        $this->initialized['brexId'] = true;
        $this->brexId = $brexId;
        return $this;
    }
    /**
     * The name of the field
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The name of the field
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Remote/external ID of custom field from external system (e.g. ERP or HRIS system)
     *
     * @return string|null
     */
    public function getRemoteId(): ?string
    {
        return $this->remoteId;
    }
    /**
     * Remote/external ID of custom field from external system (e.g. ERP or HRIS system)
     *
     * @param string|null $remoteId
     *
     * @return self
     */
    public function setRemoteId(?string $remoteId): self
    {
        $this->initialized['remoteId'] = true;
        $this->remoteId = $remoteId;
        return $this;
    }
    /**
     * The last updated timestamp of the field
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The last updated timestamp of the field
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Indicates if the field is disabled
     *
     * @return bool
     */
    public function getIsDisabled(): bool
    {
        return $this->isDisabled;
    }
    /**
     * Indicates if the field is disabled
     *
     * @param bool $isDisabled
     *
     * @return self
     */
    public function setIsDisabled(bool $isDisabled): self
    {
        $this->initialized['isDisabled'] = true;
        $this->isDisabled = $isDisabled;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getGroup(): ?string
    {
        return $this->group;
    }
    /**
     * @param string|null $group
     *
     * @return self
     */
    public function setGroup(?string $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;
        return $this;
    }
}