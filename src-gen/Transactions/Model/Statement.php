<?php

namespace NxSys\Library\Clients\Brex\API\Transactions\Model;

class Statement extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * @var StatementStartBalance
     */
    protected $startBalance;
    /**
     * @var StatementEndBalance
     */
    protected $endBalance;
    /**
     * @var StatementPeriod
     */
    protected $period;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return StatementStartBalance
     */
    public function getStartBalance(): StatementStartBalance
    {
        return $this->startBalance;
    }
    /**
     * @param StatementStartBalance $startBalance
     *
     * @return self
     */
    public function setStartBalance(StatementStartBalance $startBalance): self
    {
        $this->initialized['startBalance'] = true;
        $this->startBalance = $startBalance;
        return $this;
    }
    /**
     * @return StatementEndBalance
     */
    public function getEndBalance(): StatementEndBalance
    {
        return $this->endBalance;
    }
    /**
     * @param StatementEndBalance $endBalance
     *
     * @return self
     */
    public function setEndBalance(StatementEndBalance $endBalance): self
    {
        $this->initialized['endBalance'] = true;
        $this->endBalance = $endBalance;
        return $this;
    }
    /**
     * @return StatementPeriod
     */
    public function getPeriod(): StatementPeriod
    {
        return $this->period;
    }
    /**
     * @param StatementPeriod $period
     *
     * @return self
     */
    public function setPeriod(StatementPeriod $period): self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
}