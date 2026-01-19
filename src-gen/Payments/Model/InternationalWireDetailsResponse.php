<?php

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
     * The type of the payment instrument dictates the method.
     * 
     *
     * @var string
     */
    protected $paymentInstrumentId;
    /**
     * Counterparty's `SWIFT` code
     *
     * @var string
     */
    protected $swiftCode;
    /**
     * Counterparty's international bank account number
     *
     * @var string
     */
    protected $iban;
    /**
     * Name of counterparty's bank
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
     * Payment Instrument ID that can be passed to the /transfers endpoint to trigger a transfer.
     * The type of the payment instrument dictates the method.
     * 
     *
     * @return string
     */
    public function getPaymentInstrumentId(): string
    {
        return $this->paymentInstrumentId;
    }
    /**
    * Payment Instrument ID that can be passed to the /transfers endpoint to trigger a transfer.
    The type of the payment instrument dictates the method.
    
    *
    * @param string $paymentInstrumentId
    *
    * @return self
    */
    public function setPaymentInstrumentId(string $paymentInstrumentId): self
    {
        $this->initialized['paymentInstrumentId'] = true;
        $this->paymentInstrumentId = $paymentInstrumentId;
        return $this;
    }
    /**
     * Counterparty's `SWIFT` code
     *
     * @return string
     */
    public function getSwiftCode(): string
    {
        return $this->swiftCode;
    }
    /**
     * Counterparty's `SWIFT` code
     *
     * @param string $swiftCode
     *
     * @return self
     */
    public function setSwiftCode(string $swiftCode): self
    {
        $this->initialized['swiftCode'] = true;
        $this->swiftCode = $swiftCode;
        return $this;
    }
    /**
     * Counterparty's international bank account number
     *
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }
    /**
     * Counterparty's international bank account number
     *
     * @param string $iban
     *
     * @return self
     */
    public function setIban(string $iban): self
    {
        $this->initialized['iban'] = true;
        $this->iban = $iban;
        return $this;
    }
    /**
     * Name of counterparty's bank
     *
     * @return string|null
     */
    public function getBeneficiaryBankName(): ?string
    {
        return $this->beneficiaryBankName;
    }
    /**
     * Name of counterparty's bank
     *
     * @param string|null $beneficiaryBankName
     *
     * @return self
     */
    public function setBeneficiaryBankName(?string $beneficiaryBankName): self
    {
        $this->initialized['beneficiaryBankName'] = true;
        $this->beneficiaryBankName = $beneficiaryBankName;
        return $this;
    }
    /**
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     *
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }
    /**
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     *
     * @param Address $address
     *
     * @return self
     */
    public function setAddress(Address $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}