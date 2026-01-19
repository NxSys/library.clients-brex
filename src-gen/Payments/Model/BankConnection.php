<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class BankConnection extends \ArrayObject
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
     * @var BankDetails
     */
    protected $bankDetails;
    /**
     * 
     * Brex cash account ID
     * 
     *
     * @var string|null
     */
    protected $brexAccountId;
    /**
     * @var string
     */
    protected $lastFour;
    /**
     * @var BankConnectionAvailableBalance
     */
    protected $availableBalance;
    /**
     * @var BankConnectionCurrentBalance
     */
    protected $currentBalance;
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
     * @return BankDetails
     */
    public function getBankDetails(): BankDetails
    {
        return $this->bankDetails;
    }
    /**
     * @param BankDetails $bankDetails
     *
     * @return self
     */
    public function setBankDetails(BankDetails $bankDetails): self
    {
        $this->initialized['bankDetails'] = true;
        $this->bankDetails = $bankDetails;
        return $this;
    }
    /**
     * 
     * Brex cash account ID
     * 
     *
     * @return string|null
     */
    public function getBrexAccountId(): ?string
    {
        return $this->brexAccountId;
    }
    /**
    * 
    Brex cash account ID
    
    *
    * @param string|null $brexAccountId
    *
    * @return self
    */
    public function setBrexAccountId(?string $brexAccountId): self
    {
        $this->initialized['brexAccountId'] = true;
        $this->brexAccountId = $brexAccountId;
        return $this;
    }
    /**
     * @return string
     */
    public function getLastFour(): string
    {
        return $this->lastFour;
    }
    /**
     * @param string $lastFour
     *
     * @return self
     */
    public function setLastFour(string $lastFour): self
    {
        $this->initialized['lastFour'] = true;
        $this->lastFour = $lastFour;
        return $this;
    }
    /**
     * @return BankConnectionAvailableBalance
     */
    public function getAvailableBalance(): BankConnectionAvailableBalance
    {
        return $this->availableBalance;
    }
    /**
     * @param BankConnectionAvailableBalance $availableBalance
     *
     * @return self
     */
    public function setAvailableBalance(BankConnectionAvailableBalance $availableBalance): self
    {
        $this->initialized['availableBalance'] = true;
        $this->availableBalance = $availableBalance;
        return $this;
    }
    /**
     * @return BankConnectionCurrentBalance
     */
    public function getCurrentBalance(): BankConnectionCurrentBalance
    {
        return $this->currentBalance;
    }
    /**
     * @param BankConnectionCurrentBalance $currentBalance
     *
     * @return self
     */
    public function setCurrentBalance(BankConnectionCurrentBalance $currentBalance): self
    {
        $this->initialized['currentBalance'] = true;
        $this->currentBalance = $currentBalance;
        return $this;
    }
}