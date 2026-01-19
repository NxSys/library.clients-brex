<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class AccountingFieldValue extends \ArrayObject
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
     * Brex internal field identifier
     *
     * @var string
     */
    protected $brexFieldId;
    /**
     * Remote system field identifier
     *
     * @var string|null
     */
    protected $remoteFieldId;
    /**
     * Brex internal field value identifier
     *
     * @var string
     */
    protected $brexFieldValueId;
    /**
     * Remote system field value identifier
     *
     * @var string|null
     */
    protected $remoteFieldValueId;
    /**
     * Brex internal field identifier
     *
     * @return string
     */
    public function getBrexFieldId(): string
    {
        return $this->brexFieldId;
    }
    /**
     * Brex internal field identifier
     *
     * @param string $brexFieldId
     *
     * @return self
     */
    public function setBrexFieldId(string $brexFieldId): self
    {
        $this->initialized['brexFieldId'] = true;
        $this->brexFieldId = $brexFieldId;
        return $this;
    }
    /**
     * Remote system field identifier
     *
     * @return string|null
     */
    public function getRemoteFieldId(): ?string
    {
        return $this->remoteFieldId;
    }
    /**
     * Remote system field identifier
     *
     * @param string|null $remoteFieldId
     *
     * @return self
     */
    public function setRemoteFieldId(?string $remoteFieldId): self
    {
        $this->initialized['remoteFieldId'] = true;
        $this->remoteFieldId = $remoteFieldId;
        return $this;
    }
    /**
     * Brex internal field value identifier
     *
     * @return string
     */
    public function getBrexFieldValueId(): string
    {
        return $this->brexFieldValueId;
    }
    /**
     * Brex internal field value identifier
     *
     * @param string $brexFieldValueId
     *
     * @return self
     */
    public function setBrexFieldValueId(string $brexFieldValueId): self
    {
        $this->initialized['brexFieldValueId'] = true;
        $this->brexFieldValueId = $brexFieldValueId;
        return $this;
    }
    /**
     * Remote system field value identifier
     *
     * @return string|null
     */
    public function getRemoteFieldValueId(): ?string
    {
        return $this->remoteFieldValueId;
    }
    /**
     * Remote system field value identifier
     *
     * @param string|null $remoteFieldValueId
     *
     * @return self
     */
    public function setRemoteFieldValueId(?string $remoteFieldValueId): self
    {
        $this->initialized['remoteFieldValueId'] = true;
        $this->remoteFieldValueId = $remoteFieldValueId;
        return $this;
    }
}