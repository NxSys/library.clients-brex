<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class ExportSuccessDetails extends \ArrayObject
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
     * External system identifier assigned to the exported record
     *
     * @var string|null
     */
    protected $referenceId;
    /**
     * URL pointing to the record in the external system
     *
     * @var string
     */
    protected $deepLinkUrl;
    /**
     * External system identifier assigned to the exported record
     *
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }
    /**
     * External system identifier assigned to the exported record
     *
     * @param string|null $referenceId
     *
     * @return self
     */
    public function setReferenceId(?string $referenceId): self
    {
        $this->initialized['referenceId'] = true;
        $this->referenceId = $referenceId;
        return $this;
    }
    /**
     * URL pointing to the record in the external system
     *
     * @return string
     */
    public function getDeepLinkUrl(): string
    {
        return $this->deepLinkUrl;
    }
    /**
     * URL pointing to the record in the external system
     *
     * @param string $deepLinkUrl
     *
     * @return self
     */
    public function setDeepLinkUrl(string $deepLinkUrl): self
    {
        $this->initialized['deepLinkUrl'] = true;
        $this->deepLinkUrl = $deepLinkUrl;
        return $this;
    }
}