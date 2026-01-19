<?php

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class CardExpiration extends \ArrayObject
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
     * @var int
     */
    protected $month;
    /**
     * @var int
     */
    protected $year;
    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }
    /**
     * @param int $month
     *
     * @return self
     */
    public function setMonth(int $month): self
    {
        $this->initialized['month'] = true;
        $this->month = $month;
        return $this;
    }
    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }
    /**
     * @param int $year
     *
     * @return self
     */
    public function setYear(int $year): self
    {
        $this->initialized['year'] = true;
        $this->year = $year;
        return $this;
    }
}