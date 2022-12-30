<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class InternationalWireDetailsResponse extends \ArrayObject
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
     * Payment Instrument ID that can be passed to the /transfers endpoint to trigger a transfer.
     *
     * @var string
     */
    protected $paymentInstrumentId;
    /**
     * Counterparty's `SWIFT` code.
     *
     * @var string
     */
    protected $swiftCode;
    /**
     * Counterparty's international bank account number.
     *
     * @var string
     */
    protected $iban;
    /**
     * Name of counterparty's bank.
     *
     * @var string|null
     */
    protected $beneficiaryBankName;
    /**
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     *
     * @var Address
     */
    protected $address;

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
     * Payment Instrument ID that can be passed to the /transfers endpoint to trigger a transfer.
    The type of the payment instrument dictates the method.
     */
    public function getPaymentInstrumentId(): string
    {
        return $this->paymentInstrumentId;
    }

    /**
     * Payment Instrument ID that can be passed to the /transfers endpoint to trigger a transfer.
    The type of the payment instrument dictates the method.
     */
    public function setPaymentInstrumentId(string $paymentInstrumentId): self
    {
        $this->initialized['paymentInstrumentId'] = true;
        $this->paymentInstrumentId = $paymentInstrumentId;

        return $this;
    }

    /**
     * Counterparty's `SWIFT` code.
     */
    public function getSwiftCode(): string
    {
        return $this->swiftCode;
    }

    /**
     * Counterparty's `SWIFT` code.
     */
    public function setSwiftCode(string $swiftCode): self
    {
        $this->initialized['swiftCode'] = true;
        $this->swiftCode = $swiftCode;

        return $this;
    }

    /**
     * Counterparty's international bank account number.
     */
    public function getIban(): string
    {
        return $this->iban;
    }

    /**
     * Counterparty's international bank account number.
     */
    public function setIban(string $iban): self
    {
        $this->initialized['iban'] = true;
        $this->iban = $iban;

        return $this;
    }

    /**
     * Name of counterparty's bank.
     */
    public function getBeneficiaryBankName(): ?string
    {
        return $this->beneficiaryBankName;
    }

    /**
     * Name of counterparty's bank.
     */
    public function setBeneficiaryBankName(?string $beneficiaryBankName): self
    {
        $this->initialized['beneficiaryBankName'] = true;
        $this->beneficiaryBankName = $beneficiaryBankName;

        return $this;
    }

    /**
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     */
    public function setAddress(Address $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }
}
