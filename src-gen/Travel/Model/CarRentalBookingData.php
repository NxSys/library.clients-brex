<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class CarRentalBookingData extends \ArrayObject
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
     * Information on a rental car.
     *
     * @var CarRentalBookingDataCarDetails
     */
    protected $carDetails;
    /**
     * Information on a car reservation such as pickup, drop-off, etc.
     *
     * @var CarRentalBookingDataReservationDetails
     */
    protected $reservationDetails;
    /**
     * @var string
     */
    protected $type;
    /**
     * Information on a rental car.
     *
     * @return CarRentalBookingDataCarDetails
     */
    public function getCarDetails(): CarRentalBookingDataCarDetails
    {
        return $this->carDetails;
    }
    /**
     * Information on a rental car.
     *
     * @param CarRentalBookingDataCarDetails $carDetails
     *
     * @return self
     */
    public function setCarDetails(CarRentalBookingDataCarDetails $carDetails): self
    {
        $this->initialized['carDetails'] = true;
        $this->carDetails = $carDetails;
        return $this;
    }
    /**
     * Information on a car reservation such as pickup, drop-off, etc.
     *
     * @return CarRentalBookingDataReservationDetails
     */
    public function getReservationDetails(): CarRentalBookingDataReservationDetails
    {
        return $this->reservationDetails;
    }
    /**
     * Information on a car reservation such as pickup, drop-off, etc.
     *
     * @param CarRentalBookingDataReservationDetails $reservationDetails
     *
     * @return self
     */
    public function setReservationDetails(CarRentalBookingDataReservationDetails $reservationDetails): self
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