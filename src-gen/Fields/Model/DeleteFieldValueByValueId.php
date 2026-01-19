<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class DeleteFieldValueByValueId extends \ArrayObject
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
     * The value ID or code of the field value; Usually it is a unique identifier for the custom field value in the remote system
     *
     * @var string
     */
    protected $valueId;
    /**
     * The value ID or code of the field value; Usually it is a unique identifier for the custom field value in the remote system
     *
     * @return string
     */
    public function getValueId(): string
    {
        return $this->valueId;
    }
    /**
     * The value ID or code of the field value; Usually it is a unique identifier for the custom field value in the remote system
     *
     * @param string $valueId
     *
     * @return self
     */
    public function setValueId(string $valueId): self
    {
        $this->initialized['valueId'] = true;
        $this->valueId = $valueId;
        return $this;
    }
}