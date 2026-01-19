<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class VendorDetails extends \ArrayObject
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
     * ID of the vendor's payment instrument: this will dictate the payment method and the
     * counterparty of the transaction.
     * The payment instrument ID is returned from the /vendors response and the type of the
     * instrument will dictate the payment method.
     * eg. Passing an instrument ID of type ACH will trigger an ACH payment to the associated vendor.
     * Since a payment instrument can be updated while retaining the same payment_instrument_id,
     * please make sure to double check the details.
     * 
     *
     * @var string
     */
    protected $paymentInstrumentId;
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
     * ID of the vendor's payment instrument: this will dictate the payment method and the
     * counterparty of the transaction.
     * The payment instrument ID is returned from the /vendors response and the type of the
     * instrument will dictate the payment method.
     * eg. Passing an instrument ID of type ACH will trigger an ACH payment to the associated vendor.
     * Since a payment instrument can be updated while retaining the same payment_instrument_id,
     * please make sure to double check the details.
     * 
     *
     * @return string
     */
    public function getPaymentInstrumentId(): string
    {
        return $this->paymentInstrumentId;
    }
    /**
    * ID of the vendor's payment instrument: this will dictate the payment method and the
    counterparty of the transaction.
    The payment instrument ID is returned from the /vendors response and the type of the
    instrument will dictate the payment method.
    eg. Passing an instrument ID of type ACH will trigger an ACH payment to the associated vendor.
    Since a payment instrument can be updated while retaining the same payment_instrument_id, 
    please make sure to double check the details.
    
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
}