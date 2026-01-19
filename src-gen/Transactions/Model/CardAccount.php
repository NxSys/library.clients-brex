<?php

namespace NxSys\Library\Clients\Brex\API\Transactions\Model;

class CardAccount extends \ArrayObject
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
     * ID of the card account
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var CardAccountCurrentBalance
     */
    protected $currentBalance;
    /**
     * @var CardAccountAvailableBalance
     */
    protected $availableBalance;
    /**
     * @var CardAccountAccountLimit
     */
    protected $accountLimit;
    /**
     * @var StatementPeriod
     */
    protected $currentStatementPeriod;
    /**
     * ID of the card account
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of the card account
     *
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
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
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
     * @return CardAccountCurrentBalance
     */
    public function getCurrentBalance(): CardAccountCurrentBalance
    {
        return $this->currentBalance;
    }
    /**
     * @param CardAccountCurrentBalance $currentBalance
     *
     * @return self
     */
    public function setCurrentBalance(CardAccountCurrentBalance $currentBalance): self
    {
        $this->initialized['currentBalance'] = true;
        $this->currentBalance = $currentBalance;
        return $this;
    }
    /**
     * @return CardAccountAvailableBalance
     */
    public function getAvailableBalance(): CardAccountAvailableBalance
    {
        return $this->availableBalance;
    }
    /**
     * @param CardAccountAvailableBalance $availableBalance
     *
     * @return self
     */
    public function setAvailableBalance(CardAccountAvailableBalance $availableBalance): self
    {
        $this->initialized['availableBalance'] = true;
        $this->availableBalance = $availableBalance;
        return $this;
    }
    /**
     * @return CardAccountAccountLimit
     */
    public function getAccountLimit(): CardAccountAccountLimit
    {
        return $this->accountLimit;
    }
    /**
     * @param CardAccountAccountLimit $accountLimit
     *
     * @return self
     */
    public function setAccountLimit(CardAccountAccountLimit $accountLimit): self
    {
        $this->initialized['accountLimit'] = true;
        $this->accountLimit = $accountLimit;
        return $this;
    }
    /**
     * @return StatementPeriod
     */
    public function getCurrentStatementPeriod(): StatementPeriod
    {
        return $this->currentStatementPeriod;
    }
    /**
     * @param StatementPeriod $currentStatementPeriod
     *
     * @return self
     */
    public function setCurrentStatementPeriod(StatementPeriod $currentStatementPeriod): self
    {
        $this->initialized['currentStatementPeriod'] = true;
        $this->currentStatementPeriod = $currentStatementPeriod;
        return $this;
    }
}