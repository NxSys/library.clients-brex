<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class DeleteFieldValueByRemoteId extends \ArrayObject
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
     * Remote/external ID of custom field value from external system (e.g. ERP or HRIS system)
     *
     * @var string
     */
    protected $remoteId;
    /**
     * Remote/external ID of custom field value from external system (e.g. ERP or HRIS system)
     *
     * @return string
     */
    public function getRemoteId(): string
    {
        return $this->remoteId;
    }
    /**
     * Remote/external ID of custom field value from external system (e.g. ERP or HRIS system)
     *
     * @param string $remoteId
     *
     * @return self
     */
    public function setRemoteId(string $remoteId): self
    {
        $this->initialized['remoteId'] = true;
        $this->remoteId = $remoteId;
        return $this;
    }
}