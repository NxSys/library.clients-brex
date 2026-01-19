<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class FailedExportResult extends \ArrayObject
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
     * ID of the accounting record the export outcome applies to
     *
     * @var string
     */
    protected $accountingRecordId;
    /**
     * Details for a failed export
     *
     * @var FailedExportResultFailure
     */
    protected $failure;
    /**
     * ID of the accounting record the export outcome applies to
     *
     * @return string
     */
    public function getAccountingRecordId(): string
    {
        return $this->accountingRecordId;
    }
    /**
     * ID of the accounting record the export outcome applies to
     *
     * @param string $accountingRecordId
     *
     * @return self
     */
    public function setAccountingRecordId(string $accountingRecordId): self
    {
        $this->initialized['accountingRecordId'] = true;
        $this->accountingRecordId = $accountingRecordId;
        return $this;
    }
    /**
     * Details for a failed export
     *
     * @return FailedExportResultFailure
     */
    public function getFailure(): FailedExportResultFailure
    {
        return $this->failure;
    }
    /**
     * Details for a failed export
     *
     * @param FailedExportResultFailure $failure
     *
     * @return self
     */
    public function setFailure(FailedExportResultFailure $failure): self
    {
        $this->initialized['failure'] = true;
        $this->failure = $failure;
        return $this;
    }
}