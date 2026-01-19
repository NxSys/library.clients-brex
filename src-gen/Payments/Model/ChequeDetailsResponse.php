<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class ChequeDetailsResponse extends \ArrayObject
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
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     *
     * @var Address
     */
    protected $mailingAddress;
    /**
     * @var string
     */
    protected $recipientName;
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
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     *
     * @return Address
     */
    public function getMailingAddress(): Address
    {
        return $this->mailingAddress;
    }
    /**
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     *
     * @param Address $mailingAddress
     *
     * @return self
     */
    public function setMailingAddress(Address $mailingAddress): self
    {
        $this->initialized['mailingAddress'] = true;
        $this->mailingAddress = $mailingAddress;
        return $this;
    }
    /**
     * @return string
     */
    public function getRecipientName(): string
    {
        return $this->recipientName;
    }
    /**
     * @param string $recipientName
     *
     * @return self
     */
    public function setRecipientName(string $recipientName): self
    {
        $this->initialized['recipientName'] = true;
        $this->recipientName = $recipientName;
        return $this;
    }
}