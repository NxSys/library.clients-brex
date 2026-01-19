<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class SuccessfulExportResult extends \ArrayObject
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
     * Details for a successful export
     *
     * @var SuccessfulExportResultSuccess
     */
    protected $success;
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
     * Details for a successful export
     *
     * @return SuccessfulExportResultSuccess
     */
    public function getSuccess(): SuccessfulExportResultSuccess
    {
        return $this->success;
    }
    /**
     * Details for a successful export
     *
     * @param SuccessfulExportResultSuccess $success
     *
     * @return self
     */
    public function setSuccess(SuccessfulExportResultSuccess $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;
        return $this;
    }
}