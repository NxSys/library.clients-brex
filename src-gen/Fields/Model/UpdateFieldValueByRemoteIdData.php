<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class UpdateFieldValueByRemoteIdData extends \ArrayObject
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
     * @var string|null
     */
    protected $value;
    /**
     * Indicates if the field value is disabled
     *
     * @var bool|null
     */
    protected $isDisabled;
    /**
     * The display name of the field value
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * The display name of the field value
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
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