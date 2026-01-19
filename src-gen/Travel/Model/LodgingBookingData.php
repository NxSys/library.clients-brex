<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class LodgingBookingData extends \ArrayObject
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
     * Information on a lodging venue.
     *
     * @var LodgingBookingDataLodgingDetails
     */
    protected $lodgingDetails;
    /**
     * Information on a reservation such as check-in, checkout, etc.
     *
     * @var LodgingBookingDataReservationDetails
     */
    protected $reservationDetails;
    /**
     * @var string
     */
    protected $type;
    /**
     * Information on a lodging venue.
     *
     * @return LodgingBookingDataLodgingDetails
     */
    public function getLodgingDetails(): LodgingBookingDataLodgingDetails
    {
        return $this->lodgingDetails;
    }
    /**
     * Information on a lodging venue.
     *
     * @param LodgingBookingDataLodgingDetails $lodgingDetails
     *
     * @return self
     */
    public function setLodgingDetails(LodgingBookingDataLodgingDetails $lodgingDetails): self
    {
        $this->initialized['lodgingDetails'] = true;
        $this->lodgingDetails = $lodgingDetails;
        return $this;
    }
    /**
     * Information on a reservation such as check-in, checkout, etc.
     *
     * @return LodgingBookingDataReservationDetails
     */
    public function getReservationDetails(): LodgingBookingDataReservationDetails
    {
        return $this->reservationDetails;
    }
    /**
     * Information on a reservation such as check-in, checkout, etc.
     *
     * @param LodgingBookingDataReservationDetails $reservationDetails
     *
     * @return self
     */
    public function setReservationDetails(LodgingBookingDataReservationDetails $reservationDetails): self
    {
        $this->initialized['reservationDetails'] = true;
        $this->reservationDetails = $reservationDetails;
        return $this;
    }
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
}