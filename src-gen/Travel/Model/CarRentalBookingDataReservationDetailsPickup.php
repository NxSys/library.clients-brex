<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class CarRentalBookingDataReservationDetailsPickup extends \ArrayObject
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
     * @var CarRentalBookingDataRentalEndpointLocation
     */
    protected $location;
    /**
     * @var CarRentalBookingDataRentalEndpointTime
     */
    protected $time;
    /**
     * @return CarRentalBookingDataRentalEndpointLocation
     */
    public function getLocation(): CarRentalBookingDataRentalEndpointLocation
    {
        return $this->location;
    }
    /**
     * @param CarRentalBookingDataRentalEndpointLocation $location
     *
     * @return self
     */
    public function setLocation(CarRentalBookingDataRentalEndpointLocation $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * @return CarRentalBookingDataRentalEndpointTime
     */
    public function getTime(): CarRentalBookingDataRentalEndpointTime
    {
        return $this->time;
    }
    /**
     * @param CarRentalBookingDataRentalEndpointTime $time
     *
     * @return self
     */
    public function setTime(CarRentalBookingDataRentalEndpointTime $time): self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
}