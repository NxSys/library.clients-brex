<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class FieldValue extends \ArrayObject
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
     * The internal Brex ID of the field value
     *
     * @var string
     */
    protected $brexId;
    /**
     * Remote/external ID of custom field value from external system (e.g. ERP or HRIS system)
     *
     * @var string|null
     */
    protected $remoteId;
    /**
     * The value ID or code of the field value; Usually it is a unique identifier for the custom field value in the remote system
     *
     * @var string|null
     */
    protected $valueId;
    /**
     * The display name of the field value
     *
     * @var string
     */
    protected $value;
    /**
     * The ID of the parent field this value belongs to
     *
     * @var string
     */
    protected $fieldId;
    /**
     * The last updated timestamp of the field value
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Indicates if the field value is disabled
     *
     * @var bool
     */
    protected $isDisabled;
    /**
     * The internal Brex ID of the field value
     *
     * @return string
     */
    public function getBrexId(): string
    {
        return $this->brexId;
    }
    /**
     * The internal Brex ID of the field value
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
     * The ID of the parent field this value belongs to
     *
     * @return string
     */
    public function getFieldId(): string
    {
        return $this->fieldId;
    }
    /**
     * The ID of the parent field this value belongs to
     *
     * @param string $fieldId
     *
     * @return self
     */
    public function setFieldId(string $fieldId): self
    {
        $this->initialized['fieldId'] = true;
        $this->fieldId = $fieldId;
        return $this;
    }
    /**
     * The last updated timestamp of the field value
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The last updated timestamp of the field value
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
     * Indicates if the field value is disabled
     *
     * @return bool
     */
    public function getIsDisabled(): bool
    {
        return $this->isDisabled;
    }
    /**
     * Indicates if the field value is disabled
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
}