<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class UpdateFieldValueByValueId extends \ArrayObject
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
     * @var UpdateFieldValueByValueIdData
     */
    protected $data;
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
    /**
     * @return UpdateFieldValueByValueIdData
     */
    public function getData(): UpdateFieldValueByValueIdData
    {
        return $this->data;
    }
    /**
     * @param UpdateFieldValueByValueIdData $data
     *
     * @return self
     */
    public function setData(UpdateFieldValueByValueIdData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}