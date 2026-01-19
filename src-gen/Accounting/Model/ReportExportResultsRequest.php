<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class ReportExportResultsRequest extends \ArrayObject
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
     * Array of export results (must contain at least one result)
     *
     * @var list<mixed>
     */
    protected $results;
    /**
     * Array of export results (must contain at least one result)
     *
     * @return list<mixed>
     */
    public function getResults(): array
    {
        return $this->results;
    }
    /**
     * Array of export results (must contain at least one result)
     *
     * @param list<mixed> $results
     *
     * @return self
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
}