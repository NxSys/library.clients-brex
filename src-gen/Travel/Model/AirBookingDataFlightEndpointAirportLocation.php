<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class AirBookingDataFlightEndpointAirportLocation extends \ArrayObject
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
     * The country where the address is located. May be an alpha-2 code, an alpha-3 code, or the full name of the country.
     *
     * @var string|null
     */
    protected $country;
    /**
     * Depending on the country, this can be a state, a province, or something equivalent to those. May be an abbreviation or the full name.
     *
     * @var string|null
     */
    protected $administrativeArea;
    /**
     * The city where the address is located.
     *
     * @var string|null
     */
    protected $city;
    /**
     * The postal code of the given address.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * The first line of the address.
     *
     * @var string|null
     */
    protected $addressLine1;
    /**
     * The second line of the address.
     *
     * @var string|null
     */
    protected $addressLine2;
    /**
     * @var AddressCoordinates
     */
    protected $coordinates;
    /**
     * The timezone in the given address.
     *
     * @var string|null
     */
    protected $timezone;
    /**
     * The country where the address is located. May be an alpha-2 code, an alpha-3 code, or the full name of the country.
     *
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * The country where the address is located. May be an alpha-2 code, an alpha-3 code, or the full name of the country.
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
     * Depending on the country, this can be a state, a province, or something equivalent to those. May be an abbreviation or the full name.
     *
     * @return string|null
     */
    public function getAdministrativeArea(): ?string
    {
        return $this->administrativeArea;
    }
    /**
     * Depending on the country, this can be a state, a province, or something equivalent to those. May be an abbreviation or the full name.
     *
     * @param string|null $administrativeArea
     *
     * @return self
     */
    public function setAdministrativeArea(?string $administrativeArea): self
    {
        $this->initialized['administrativeArea'] = true;
        $this->administrativeArea = $administrativeArea;
        return $this;
    }
    /**
     * The city where the address is located.
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * The city where the address is located.
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
     * The postal code of the given address.
     *
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * The postal code of the given address.
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
     * The first line of the address.
     *
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }
    /**
     * The first line of the address.
     *
     * @param string|null $addressLine1
     *
     * @return self
     */
    public function setAddressLine1(?string $addressLine1): self
    {
        $this->initialized['addressLine1'] = true;
        $this->addressLine1 = $addressLine1;
        return $this;
    }
    /**
     * The second line of the address.
     *
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }
    /**
     * The second line of the address.
     *
     * @param string|null $addressLine2
     *
     * @return self
     */
    public function setAddressLine2(?string $addressLine2): self
    {
        $this->initialized['addressLine2'] = true;
        $this->addressLine2 = $addressLine2;
        return $this;
    }
    /**
     * @return AddressCoordinates
     */
    public function getCoordinates(): AddressCoordinates
    {
        return $this->coordinates;
    }
    /**
     * @param AddressCoordinates $coordinates
     *
     * @return self
     */
    public function setCoordinates(AddressCoordinates $coordinates): self
    {
        $this->initialized['coordinates'] = true;
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * The timezone in the given address.
     *
     * @return string|null
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }
    /**
     * The timezone in the given address.
     *
     * @param string|null $timezone
     *
     * @return self
     */
    public function setTimezone(?string $timezone): self
    {
        $this->initialized['timezone'] = true;
        $this->timezone = $timezone;
        return $this;
    }
}