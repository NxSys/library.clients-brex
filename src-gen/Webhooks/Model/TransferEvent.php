<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Model;

class TransferEvent extends \ArrayObject
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
    protected $companyId;
    /**
     * Only ACH, DOMESTIC_WIRE, CHEQUE, INTERNATIONAL_WIRE and BOOK_TRANSFER details can be retrieved from the Payments API.
     *
     * @var string
     */
    protected $paymentType;
    /**
     * @var string|null
     */
    protected $returnForId;
    /**
     * @return string
     */
    public function getCompanyId(): string
    {
        return $this->companyId;
    }
    /**
     * @param string $companyId
     */
    public function setCompanyId(string $companyId)
    {
        $this->initialized['companyId'] = true;
        $this->companyId = $companyId;
    }
    /**
     * Only ACH, DOMESTIC_WIRE, CHEQUE, INTERNATIONAL_WIRE and BOOK_TRANSFER details can be retrieved from the Payments API.
     *
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }
    /**
     * Only ACH, DOMESTIC_WIRE, CHEQUE, INTERNATIONAL_WIRE and BOOK_TRANSFER details can be retrieved from the Payments API.
     *
     * @param string $paymentType
     */
    public function setPaymentType(string $paymentType)
    {
        $this->initialized['paymentType'] = true;
        $this->paymentType = $paymentType;
    }
    /**
     * @return string|null
     */
    public function getReturnForId(): ?string
    {
        return $this->returnForId;
    }
    /**
     * @param string|null $returnForId
     */
    public function setReturnForId(?string $returnForId)
    {
        $this->initialized['returnForId'] = true;
        $this->returnForId = $returnForId;
    }
}