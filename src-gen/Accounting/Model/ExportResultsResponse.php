<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class ExportResultsResponse extends \ArrayObject
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
     * Accounting record ids that were updated by the request
     *
     * @var list<string>
     */
    protected $updatedAccountingRecordIds;
    /**
     * Accounting record ids that were updated by the request
     *
     * @return list<string>
     */
    public function getUpdatedAccountingRecordIds(): array
    {
        return $this->updatedAccountingRecordIds;
    }
    /**
     * Accounting record ids that were updated by the request
     *
     * @param list<string> $updatedAccountingRecordIds
     *
     * @return self
     */
    public function setUpdatedAccountingRecordIds(array $updatedAccountingRecordIds): self
    {
        $this->initialized['updatedAccountingRecordIds'] = true;
        $this->updatedAccountingRecordIds = $updatedAccountingRecordIds;
        return $this;
    }
}