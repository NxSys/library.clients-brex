<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class InternationalInstruction extends \ArrayObject
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
    protected $swiftAccountNumber;
    /**
     * @var string
     */
    protected $swiftBankNumber;
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
     * @var string
     */
    protected $specialInstructions;
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
    public function getSwiftAccountNumber(): string
    {
        return $this->swiftAccountNumber;
    }
    /**
     * @param string $swiftAccountNumber
     *
     * @return self
     */
    public function setSwiftAccountNumber(string $swiftAccountNumber): self
    {
        $this->initialized['swiftAccountNumber'] = true;
        $this->swiftAccountNumber = $swiftAccountNumber;
        return $this;
    }
    /**
     * @return string
     */
    public function getSwiftBankNumber(): string
    {
        return $this->swiftBankNumber;
    }
    /**
     * @param string $swiftBankNumber
     *
     * @return self
     */
    public function setSwiftBankNumber(string $swiftBankNumber): self
    {
        $this->initialized['swiftBankNumber'] = true;
        $this->swiftBankNumber = $swiftBankNumber;
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
    /**
     * @return string
     */
    public function getSpecialInstructions(): string
    {
        return $this->specialInstructions;
    }
    /**
     * @param string $specialInstructions
     *
     * @return self
     */
    public function setSpecialInstructions(string $specialInstructions): self
    {
        $this->initialized['specialInstructions'] = true;
        $this->specialInstructions = $specialInstructions;
        return $this;
    }
}