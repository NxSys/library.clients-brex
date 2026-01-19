<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class BankAccountDetailsResponse extends \ArrayObject
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
    protected $type;
    /**
     * Routing number of a bank account (or SWIFT/BIC code for international transfer). For incoming cheques, this field might be null.
     *
     * @var string|null
     */
    protected $routingNumber;
    /**
     * Account number of a bank account (or IBAN code for international transfer). For incoming cheques, this field might be null.
     *
     * @var string|null
     */
    protected $accountNumber;
    /**
     * Description of the transfer.
     *
     * @var string|null
     */
    protected $description;
    /**
     * @var BankAccountDetailsResponsebeneficiaryBank
     */
    protected $beneficiaryBank;
    /**
     * Fed reference number for incoming wires
     *
     * @var string|null
     */
    protected $fedReferenceNumber;
    /**
     * External Memo populated by the sender
     *
     * @var string|null
     */
    protected $externalMemo;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Routing number of a bank account (or SWIFT/BIC code for international transfer). For incoming cheques, this field might be null.
     *
     * @return string|null
     */
    public function getRoutingNumber(): ?string
    {
        return $this->routingNumber;
    }
    /**
     * Routing number of a bank account (or SWIFT/BIC code for international transfer). For incoming cheques, this field might be null.
     *
     * @param string|null $routingNumber
     *
     * @return self
     */
    public function setRoutingNumber(?string $routingNumber): self
    {
        $this->initialized['routingNumber'] = true;
        $this->routingNumber = $routingNumber;
        return $this;
    }
    /**
     * Account number of a bank account (or IBAN code for international transfer). For incoming cheques, this field might be null.
     *
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Account number of a bank account (or IBAN code for international transfer). For incoming cheques, this field might be null.
     *
     * @param string|null $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(?string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Description of the transfer.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Description of the transfer.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return BankAccountDetailsResponsebeneficiaryBank
     */
    public function getBeneficiaryBank(): BankAccountDetailsResponsebeneficiaryBank
    {
        return $this->beneficiaryBank;
    }
    /**
     * @param BankAccountDetailsResponsebeneficiaryBank $beneficiaryBank
     *
     * @return self
     */
    public function setBeneficiaryBank(BankAccountDetailsResponsebeneficiaryBank $beneficiaryBank): self
    {
        $this->initialized['beneficiaryBank'] = true;
        $this->beneficiaryBank = $beneficiaryBank;
        return $this;
    }
    /**
     * Fed reference number for incoming wires
     *
     * @return string|null
     */
    public function getFedReferenceNumber(): ?string
    {
        return $this->fedReferenceNumber;
    }
    /**
     * Fed reference number for incoming wires
     *
     * @param string|null $fedReferenceNumber
     *
     * @return self
     */
    public function setFedReferenceNumber(?string $fedReferenceNumber): self
    {
        $this->initialized['fedReferenceNumber'] = true;
        $this->fedReferenceNumber = $fedReferenceNumber;
        return $this;
    }
    /**
     * External Memo populated by the sender
     *
     * @return string|null
     */
    public function getExternalMemo(): ?string
    {
        return $this->externalMemo;
    }
    /**
     * External Memo populated by the sender
     *
     * @param string|null $externalMemo
     *
     * @return self
     */
    public function setExternalMemo(?string $externalMemo): self
    {
        $this->initialized['externalMemo'] = true;
        $this->externalMemo = $externalMemo;
        return $this;
    }
}