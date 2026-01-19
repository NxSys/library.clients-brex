<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class CreateFieldValueBody extends \ArrayObject
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
     * The display name of the field value
     *
     * @var string
     */
    protected $value;
    /**
     * The value ID or code of the field value; Usually it is a unique identifier for the custom field value in the remote system
     *
     * @var string|null
     */
    protected $valueId;
    /**
     * Remote/external ID of custom field value from external system (e.g. ERP or HRIS system)
     *
     * @var string|null
     */
    protected $remoteId;
    /**
     * Indicates if the field value is disabled
     *
     * @var bool|null
     */
    protected $isDisabled;
    /**
     * The display name of the field value
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * The display name of the field value
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The value ID or code of the field value; Usually it is a unique identifier for the custom field value in the remote system
     *
     * @return string|null
     */
    public function getValueId(): ?string
    {
        return $this->valueId;
    }
    /**
     * The value ID or code of the field value; Usually it is a unique identifier for the custom field value in the remote system
     *
     * @param string|null $valueId
     *
     * @return self
     */
    public function setValueId(?string $valueId): self
    {
        $this->initialized['valueId'] = true;
        $this->valueId = $valueId;
        return $this;
    }
    /**
     * Remote/external ID of custom field value from external system (e.g. ERP or HRIS system)
     *
     * @return string|null
     */
    public function getRemoteId(): ?string
    {
        return $this->remoteId;
    }
    /**
     * Remote/external ID of custom field value from external system (e.g. ERP or HRIS system)
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
     * Indicates if the field value is disabled
     *
     * @return bool|null
     */
    public function getIsDisabled(): ?bool
    {
        return $this->isDisabled;
    }
    /**
     * Indicates if the field value is disabled
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