<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class FieldCreateBody extends \ArrayObject
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
     * The name of the field
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $group;
    /**
     * Remote/external ID of custom field from external system (e.g. ERP or HRIS system)
     *
     * @var string|null
     */
    protected $remoteId;
    /**
     * Integration ID to associate this field with a specific integration
     *
     * @var string|null
     */
    protected $integrationId;
    /**
     * Indicates if the field is disabled
     *
     * @var bool|null
     */
    protected $isDisabled;
    /**
     * The name of the field
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the field
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
    public function getGroup(): string
    {
        return $this->group;
    }
    /**
     * @param string $group
     *
     * @return self
     */
    public function setGroup(string $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;
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
     * Integration ID to associate this field with a specific integration
     *
     * @return string|null
     */
    public function getIntegrationId(): ?string
    {
        return $this->integrationId;
    }
    /**
     * Integration ID to associate this field with a specific integration
     *
     * @param string|null $integrationId
     *
     * @return self
     */
    public function setIntegrationId(?string $integrationId): self
    {
        $this->initialized['integrationId'] = true;
        $this->integrationId = $integrationId;
        return $this;
    }
    /**
     * Indicates if the field is disabled
     *
     * @return bool|null
     */
    public function getIsDisabled(): ?bool
    {
        return $this->isDisabled;
    }
    /**
     * Indicates if the field is disabled
     *
     * @param bool|null $isDisabled
     *
     * @return self
     */
    public function setIsDisabled(?bool $isDisabled): self
    {
        $this->initialized['isDisabled'] = true;
        $this->isDisabled = $isDisabled;
        return $this;
    }
}