<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class AirBookingDataKnownTravelerNumber extends \ArrayObject
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
     * The country that issued this document.
     *
     * @var string
     */
    protected $issuingCountry;
    /**
     * The actual document number.
     *
     * @var string
     */
    protected $documentNumber;
    /**
     * The country that issued this document.
     *
     * @return string
     */
    public function getIssuingCountry(): string
    {
        return $this->issuingCountry;
    }
    /**
     * The country that issued this document.
     *
     * @param string $issuingCountry
     *
     * @return self
     */
    public function setIssuingCountry(string $issuingCountry): self
    {
        $this->initialized['issuingCountry'] = true;
        $this->issuingCountry = $issuingCountry;
        return $this;
    }
    /**
     * The actual document number.
     *
     * @return string
     */
    public function getDocumentNumber(): string
    {
        return $this->documentNumber;
    }
    /**
     * The actual document number.
     *
     * @param string $documentNumber
     *
     * @return self
     */
    public function setDocumentNumber(string $documentNumber): self
    {
        $this->initialized['documentNumber'] = true;
        $this->documentNumber = $documentNumber;
        return $this;
    }
}