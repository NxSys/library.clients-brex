<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class Integration extends \ArrayObject
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
     * Unique identifier for the integration
     *
     * @var string
     */
    protected $integrationId;
    /**
     * The accounting vendor/system. ERP partners must request Brex to create a vendor ID for them to use this field.
     *
     * @var string
     */
    protected $vendor;
    /**
     * The vendor account ID this integration is tied to
     *
     * @var string
     */
    protected $vendorAccountId;
    /**
     * Current status of the integration
     *
     * @var string
     */
    protected $status;
    /**
     * Timestamp when the integration was created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Unique identifier for the integration
     *
     * @return string
     */
    public function getIntegrationId(): string
    {
        return $this->integrationId;
    }
    /**
     * Unique identifier for the integration
     *
     * @param string $integrationId
     *
     * @return self
     */
    public function setIntegrationId(string $integrationId): self
    {
        $this->initialized['integrationId'] = true;
        $this->integrationId = $integrationId;
        return $this;
    }
    /**
     * The accounting vendor/system. ERP partners must request Brex to create a vendor ID for them to use this field.
     *
     * @return string
     */
    public function getVendor(): string
    {
        return $this->vendor;
    }
    /**
     * The accounting vendor/system. ERP partners must request Brex to create a vendor ID for them to use this field.
     *
     * @param string $vendor
     *
     * @return self
     */
    public function setVendor(string $vendor): self
    {
        $this->initialized['vendor'] = true;
        $this->vendor = $vendor;
        return $this;
    }
    /**
     * The vendor account ID this integration is tied to
     *
     * @return string
     */
    public function getVendorAccountId(): string
    {
        return $this->vendorAccountId;
    }
    /**
     * The vendor account ID this integration is tied to
     *
     * @param string $vendorAccountId
     *
     * @return self
     */
    public function setVendorAccountId(string $vendorAccountId): self
    {
        $this->initialized['vendorAccountId'] = true;
        $this->vendorAccountId = $vendorAccountId;
        return $this;
    }
    /**
     * Current status of the integration
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Current status of the integration
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Timestamp when the integration was created
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Timestamp when the integration was created
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
}