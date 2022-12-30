<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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
     * Fed reference number for incoming wires.
     *
     * @var string|null
     */
    protected $fedReferenceNumber;
    /**
     * External Memo populated by the sender.
     *
     * @var string|null
     */
    protected $externalMemo;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Routing number of a bank account (or SWIFT/BIC code for international transfer). For incoming cheques, this field might be null.
     */
    public function getRoutingNumber(): ?string
    {
        return $this->routingNumber;
    }

    /**
     * Routing number of a bank account (or SWIFT/BIC code for international transfer). For incoming cheques, this field might be null.
     */
    public function setRoutingNumber(?string $routingNumber): self
    {
        $this->initialized['routingNumber'] = true;
        $this->routingNumber = $routingNumber;

        return $this;
    }

    /**
     * Account number of a bank account (or IBAN code for international transfer). For incoming cheques, this field might be null.
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Account number of a bank account (or IBAN code for international transfer). For incoming cheques, this field might be null.
     */
    public function setAccountNumber(?string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Description of the transfer.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Description of the transfer.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getBeneficiaryBank(): BankAccountDetailsResponsebeneficiaryBank
    {
        return $this->beneficiaryBank;
    }

    public function setBeneficiaryBank(BankAccountDetailsResponsebeneficiaryBank $beneficiaryBank): self
    {
        $this->initialized['beneficiaryBank'] = true;
        $this->beneficiaryBank = $beneficiaryBank;

        return $this;
    }

    /**
     * Fed reference number for incoming wires.
     */
    public function getFedReferenceNumber(): ?string
    {
        return $this->fedReferenceNumber;
    }

    /**
     * Fed reference number for incoming wires.
     */
    public function setFedReferenceNumber(?string $fedReferenceNumber): self
    {
        $this->initialized['fedReferenceNumber'] = true;
        $this->fedReferenceNumber = $fedReferenceNumber;

        return $this;
    }

    /**
     * External Memo populated by the sender.
     */
    public function getExternalMemo(): ?string
    {
        return $this->externalMemo;
    }

    /**
     * External Memo populated by the sender.
     */
    public function setExternalMemo(?string $externalMemo): self
    {
        $this->initialized['externalMemo'] = true;
        $this->externalMemo = $externalMemo;

        return $this;
    }
}