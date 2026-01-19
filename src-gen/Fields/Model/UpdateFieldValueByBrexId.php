<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class UpdateFieldValueByBrexId extends \ArrayObject
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
     * @var UpdateFieldValueByBrexIdData
     */
    protected $data;
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
     * @return UpdateFieldValueByBrexIdData
     */
    public function getData(): UpdateFieldValueByBrexIdData
    {
        return $this->data;
    }
    /**
     * @param UpdateFieldValueByBrexIdData $data
     *
     * @return self
     */
    public function setData(UpdateFieldValueByBrexIdData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}