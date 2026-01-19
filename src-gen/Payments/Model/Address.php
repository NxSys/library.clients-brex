<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class Address extends \ArrayObject
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
     * Address line 1, no PO Box.
     *
     * @var string|null
     */
    protected $line1;
    /**
     * Address line 2 (e.g., apartment, suite, unit, or building).
     *
     * @var string|null
     */
    protected $line2;
    /**
     * City, district, suburb, town, or village.
     *
     * @var string|null
     */
    protected $city;
    /**
     * For US-addressed the 2-letter State abbreviation. For international-addresses the county, providence, or region.
     *
     * @var string|null
     */
    protected $state;
    /**
     * Two-letter country code (ISO 3166-1 alpha-2).
     *
     * @var string|null
     */
    protected $country;
    /**
     * ZIP or postal code.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * Phone number.
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * Address line 1, no PO Box.
     *
     * @return string|null
     */
    public function getLine1(): ?string
    {
        return $this->line1;
    }
    /**
     * Address line 1, no PO Box.
     *
     * @param string|null $line1
     *
     * @return self
     */
    public function setLine1(?string $line1): self
    {
        $this->initialized['line1'] = true;
        $this->line1 = $line1;
        return $this;
    }
    /**
     * Address line 2 (e.g., apartment, suite, unit, or building).
     *
     * @return string|null
     */
    public function getLine2(): ?string
    {
        return $this->line2;
    }
    /**
     * Address line 2 (e.g., apartment, suite, unit, or building).
     *
     * @param string|null $line2
     *
     * @return self
     */
    public function setLine2(?string $line2): self
    {
        $this->initialized['line2'] = true;
        $this->line2 = $line2;
        return $this;
    }
    /**
     * City, district, suburb, town, or village.
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * City, district, suburb, town, or village.
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * For US-addressed the 2-letter State abbreviation. For international-addresses the county, providence, or region.
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * For US-addressed the 2-letter State abbreviation. For international-addresses the county, providence, or region.
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * Two-letter country code (ISO 3166-1 alpha-2).
     *
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Two-letter country code (ISO 3166-1 alpha-2).
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * ZIP or postal code.
     *
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * ZIP or postal code.
     *
     * @param string|null $postalCode
     *
     * @return self
     */
    public function setPostalCode(?string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * Phone number.
     *
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }
    /**
     * Phone number.
     *
     * @param string|null $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
}