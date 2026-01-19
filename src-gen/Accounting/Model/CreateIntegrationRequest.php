<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class CreateIntegrationRequest extends \ArrayObject
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
     * The accounting vendor/system. ERP partners must request Brex to create a vendor ID for them to use this field.
     *
     * @var string
     */
    protected $vendor;
    /**
     * The vendor account ID to tie this integration to
     *
     * @var string
     */
    protected $vendorAccountId;
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
     * The vendor account ID to tie this integration to
     *
     * @return string
     */
    public function getVendorAccountId(): string
    {
        return $this->vendorAccountId;
    }
    /**
     * The vendor account ID to tie this integration to
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
}