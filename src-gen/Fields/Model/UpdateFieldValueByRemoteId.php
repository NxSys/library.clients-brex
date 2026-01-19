<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class UpdateFieldValueByRemoteId extends \ArrayObject
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
     * @var UpdateFieldValueByRemoteIdData
     */
    protected $data;
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
    /**
     * @return UpdateFieldValueByRemoteIdData
     */
    public function getData(): UpdateFieldValueByRemoteIdData
    {
        return $this->data;
    }
    /**
     * @param UpdateFieldValueByRemoteIdData $data
     *
     * @return self
     */
    public function setData(UpdateFieldValueByRemoteIdData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}