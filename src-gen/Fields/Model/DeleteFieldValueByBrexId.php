<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class DeleteFieldValueByBrexId extends \ArrayObject
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
}