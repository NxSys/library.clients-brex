<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class LodgingBookingDataLodgingDetails extends \ArrayObject
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
     * The name of the venue as displayed to the user.
     *
     * @var string
     */
    protected $displayName;
    /**
     * @var LodgingBookingDataLodgingDetailsContactInformation
     */
    protected $contactInformation;
    /**
     * The star rating of the hotel. Some hotels have half stars.
     *
     * @var float|null
     */
    protected $starRating;
    /**
     * The brand name of the hotel.
     *
     * @var string|null
     */
    protected $brandName;
    /**
     * The name of the hotel chain.
     *
     * @var string|null
     */
    protected $chainName;
    /**
     * @var LodgingBookingDataLodgingDetailsLocation
     */
    protected $location;
    /**
     * The name of the venue as displayed to the user.
     *
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }
    /**
     * The name of the venue as displayed to the user.
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName): self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * @return LodgingBookingDataLodgingDetailsContactInformation
     */
    public function getContactInformation(): LodgingBookingDataLodgingDetailsContactInformation
    {
        return $this->contactInformation;
    }
    /**
     * @param LodgingBookingDataLodgingDetailsContactInformation $contactInformation
     *
     * @return self
     */
    public function setContactInformation(LodgingBookingDataLodgingDetailsContactInformation $contactInformation): self
    {
        $this->initialized['contactInformation'] = true;
        $this->contactInformation = $contactInformation;
        return $this;
    }
    /**
     * The star rating of the hotel. Some hotels have half stars.
     *
     * @return float|null
     */
    public function getStarRating(): ?float
    {
        return $this->starRating;
    }
    /**
     * The star rating of the hotel. Some hotels have half stars.
     *
     * @param float|null $starRating
     *
     * @return self
     */
    public function setStarRating(?float $starRating): self
    {
        $this->initialized['starRating'] = true;
        $this->starRating = $starRating;
        return $this;
    }
    /**
     * The brand name of the hotel.
     *
     * @return string|null
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }
    /**
     * The brand name of the hotel.
     *
     * @param string|null $brandName
     *
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->initialized['brandName'] = true;
        $this->brandName = $brandName;
        return $this;
    }
    /**
     * The name of the hotel chain.
     *
     * @return string|null
     */
    public function getChainName(): ?string
    {
        return $this->chainName;
    }
    /**
     * The name of the hotel chain.
     *
     * @param string|null $chainName
     *
     * @return self
     */
    public function setChainName(?string $chainName): self
    {
        $this->initialized['chainName'] = true;
        $this->chainName = $chainName;
        return $this;
    }
    /**
     * @return LodgingBookingDataLodgingDetailsLocation
     */
    public function getLocation(): LodgingBookingDataLodgingDetailsLocation
    {
        return $this->location;
    }
    /**
     * @param LodgingBookingDataLodgingDetailsLocation $location
     *
     * @return self
     */
    public function setLocation(LodgingBookingDataLodgingDetailsLocation $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
}