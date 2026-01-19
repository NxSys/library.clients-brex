<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class DomesticInstruction extends \ArrayObject
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
    protected $accountType;
    /**
     * @var string
     */
    protected $bankAccountNumber;
    /**
     * @var string
     */
    protected $bankRoutingNumber;
    /**
     * @var string
     */
    protected $beneficiaryName;
    /**
     * @var string
     */
    protected $beneficiaryAddress;
    /**
     * @var string
     */
    protected $bankName;
    /**
     * @var string
     */
    protected $bankAddress;
    /**
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }
    /**
     * @param string $accountType
     *
     * @return self
     */
    public function setAccountType(string $accountType): self
    {
        $this->initialized['accountType'] = true;
        $this->accountType = $accountType;
        return $this;
    }
    /**
     * @return string
     */
    public function getBankAccountNumber(): string
    {
        return $this->bankAccountNumber;
    }
    /**
     * @param string $bankAccountNumber
     *
     * @return self
     */
    public function setBankAccountNumber(string $bankAccountNumber): self
    {
        $this->initialized['bankAccountNumber'] = true;
        $this->bankAccountNumber = $bankAccountNumber;
        return $this;
    }
    /**
     * @return string
     */
    public function getBankRoutingNumber(): string
    {
        return $this->bankRoutingNumber;
    }
    /**
     * @param string $bankRoutingNumber
     *
     * @return self
     */
    public function setBankRoutingNumber(string $bankRoutingNumber): self
    {
        $this->initialized['bankRoutingNumber'] = true;
        $this->bankRoutingNumber = $bankRoutingNumber;
        return $this;
    }
    /**
     * @return string
     */
    public function getBeneficiaryName(): string
    {
        return $this->beneficiaryName;
    }
    /**
     * @param string $beneficiaryName
     *
     * @return self
     */
    public function setBeneficiaryName(string $beneficiaryName): self
    {
        $this->initialized['beneficiaryName'] = true;
        $this->beneficiaryName = $beneficiaryName;
        return $this;
    }
    /**
     * @return string
     */
    public function getBeneficiaryAddress(): string
    {
        return $this->beneficiaryAddress;
    }
    /**
     * @param string $beneficiaryAddress
     *
     * @return self
     */
    public function setBeneficiaryAddress(string $beneficiaryAddress): self
    {
        $this->initialized['beneficiaryAddress'] = true;
        $this->beneficiaryAddress = $beneficiaryAddress;
        return $this;
    }
    /**
     * @return string
     */
    public function getBankName(): string
    {
        return $this->bankName;
    }
    /**
     * @param string $bankName
     *
     * @return self
     */
    public function setBankName(string $bankName): self
    {
        $this->initialized['bankName'] = true;
        $this->bankName = $bankName;
        return $this;
    }
    /**
     * @return string
     */
    public function getBankAddress(): string
    {
        return $this->bankAddress;
    }
    /**
     * @param string $bankAddress
     *
     * @return self
     */
    public function setBankAddress(string $bankAddress): self
    {
        $this->initialized['bankAddress'] = true;
        $this->bankAddress = $bankAddress;
        return $this;
    }
}