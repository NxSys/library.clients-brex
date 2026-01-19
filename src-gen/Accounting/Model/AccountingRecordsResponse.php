<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class AccountingRecordsResponse extends \ArrayObject
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
     * List of accounting records
     *
     * @var list<AccountingRecordDetailed>
     */
    protected $items;
    /**
     * Total count of records matching the query
     *
     * @var float|null
     */
    protected $totalCount;
    /**
     * Cursor for the next page of results
     *
     * @var string|null
     */
    protected $nextCursor;
    /**
     * Whether there are more results available
     *
     * @var bool
     */
    protected $hasNextPage;
    /**
     * List of accounting records
     *
     * @return list<AccountingRecordDetailed>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * List of accounting records
     *
     * @param list<AccountingRecordDetailed> $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * Total count of records matching the query
     *
     * @return float|null
     */
    public function getTotalCount(): ?float
    {
        return $this->totalCount;
    }
    /**
     * Total count of records matching the query
     *
     * @param float|null $totalCount
     *
     * @return self
     */
    public function setTotalCount(?float $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * Cursor for the next page of results
     *
     * @return string|null
     */
    public function getNextCursor(): ?string
    {
        return $this->nextCursor;
    }
    /**
     * Cursor for the next page of results
     *
     * @param string|null $nextCursor
     *
     * @return self
     */
    public function setNextCursor(?string $nextCursor): self
    {
        $this->initialized['nextCursor'] = true;
        $this->nextCursor = $nextCursor;
        return $this;
    }
    /**
     * Whether there are more results available
     *
     * @return bool
     */
    public function getHasNextPage(): bool
    {
        return $this->hasNextPage;
    }
    /**
     * Whether there are more results available
     *
     * @param bool $hasNextPage
     *
     * @return self
     */
    public function setHasNextPage(bool $hasNextPage): self
    {
        $this->initialized['hasNextPage'] = true;
        $this->hasNextPage = $hasNextPage;
        return $this;
    }
}