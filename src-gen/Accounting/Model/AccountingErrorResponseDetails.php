<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class AccountingErrorResponseDetails extends \ArrayObject
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
     * ID of the existing active integration
     *
     * @var string
     */
    protected $existingIntegrationId;
    /**
     * Vendor of the existing integration
     *
     * @var string
     */
    protected $existingVendor;
    /**
     * Vendor that was requested to be created
     *
     * @var string
     */
    protected $requestedVendor;
    /**
     * Integration ID associated with the error
     *
     * @var string
     */
    protected $integrationId;
    /**
     * Current status of the integration when the error occurred
     *
     * @var string
     */
    protected $currentStatus;
    /**
     * Accounting record IDs that triggered the error
     *
     * @var list<string>
     */
    protected $duplicateAccountingRecordIds;
    /**
     * Accounting record IDs that are not ready for export
     *
     * @var list<string>
     */
    protected $notReadyForExportAccountingRecordIds;
    /**
     * Accounting record IDs that could not be found
     *
     * @var list<string>
     */
    protected $notFoundExportEntrySourceIds;
    /**
     * ID of the existing active integration
     *
     * @return string
     */
    public function getExistingIntegrationId(): string
    {
        return $this->existingIntegrationId;
    }
    /**
     * ID of the existing active integration
     *
     * @param string $existingIntegrationId
     *
     * @return self
     */
    public function setExistingIntegrationId(string $existingIntegrationId): self
    {
        $this->initialized['existingIntegrationId'] = true;
        $this->existingIntegrationId = $existingIntegrationId;
        return $this;
    }
    /**
     * Vendor of the existing integration
     *
     * @return string
     */
    public function getExistingVendor(): string
    {
        return $this->existingVendor;
    }
    /**
     * Vendor of the existing integration
     *
     * @param string $existingVendor
     *
     * @return self
     */
    public function setExistingVendor(string $existingVendor): self
    {
        $this->initialized['existingVendor'] = true;
        $this->existingVendor = $existingVendor;
        return $this;
    }
    /**
     * Vendor that was requested to be created
     *
     * @return string
     */
    public function getRequestedVendor(): string
    {
        return $this->requestedVendor;
    }
    /**
     * Vendor that was requested to be created
     *
     * @param string $requestedVendor
     *
     * @return self
     */
    public function setRequestedVendor(string $requestedVendor): self
    {
        $this->initialized['requestedVendor'] = true;
        $this->requestedVendor = $requestedVendor;
        return $this;
    }
    /**
     * Integration ID associated with the error
     *
     * @return string
     */
    public function getIntegrationId(): string
    {
        return $this->integrationId;
    }
    /**
     * Integration ID associated with the error
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
     * Current status of the integration when the error occurred
     *
     * @return string
     */
    public function getCurrentStatus(): string
    {
        return $this->currentStatus;
    }
    /**
     * Current status of the integration when the error occurred
     *
     * @param string $currentStatus
     *
     * @return self
     */
    public function setCurrentStatus(string $currentStatus): self
    {
        $this->initialized['currentStatus'] = true;
        $this->currentStatus = $currentStatus;
        return $this;
    }
    /**
     * Accounting record IDs that triggered the error
     *
     * @return list<string>
     */
    public function getDuplicateAccountingRecordIds(): array
    {
        return $this->duplicateAccountingRecordIds;
    }
    /**
     * Accounting record IDs that triggered the error
     *
     * @param list<string> $duplicateAccountingRecordIds
     *
     * @return self
     */
    public function setDuplicateAccountingRecordIds(array $duplicateAccountingRecordIds): self
    {
        $this->initialized['duplicateAccountingRecordIds'] = true;
        $this->duplicateAccountingRecordIds = $duplicateAccountingRecordIds;
        return $this;
    }
    /**
     * Accounting record IDs that are not ready for export
     *
     * @return list<string>
     */
    public function getNotReadyForExportAccountingRecordIds(): array
    {
        return $this->notReadyForExportAccountingRecordIds;
    }
    /**
     * Accounting record IDs that are not ready for export
     *
     * @param list<string> $notReadyForExportAccountingRecordIds
     *
     * @return self
     */
    public function setNotReadyForExportAccountingRecordIds(array $notReadyForExportAccountingRecordIds): self
    {
        $this->initialized['notReadyForExportAccountingRecordIds'] = true;
        $this->notReadyForExportAccountingRecordIds = $notReadyForExportAccountingRecordIds;
        return $this;
    }
    /**
     * Accounting record IDs that could not be found
     *
     * @return list<string>
     */
    public function getNotFoundExportEntrySourceIds(): array
    {
        return $this->notFoundExportEntrySourceIds;
    }
    /**
     * Accounting record IDs that could not be found
     *
     * @param list<string> $notFoundExportEntrySourceIds
     *
     * @return self
     */
    public function setNotFoundExportEntrySourceIds(array $notFoundExportEntrySourceIds): self
    {
        $this->initialized['notFoundExportEntrySourceIds'] = true;
        $this->notFoundExportEntrySourceIds = $notFoundExportEntrySourceIds;
        return $this;
    }
}