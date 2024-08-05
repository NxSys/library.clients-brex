<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class CarRentalBookingDataRentalEndpoint extends \ArrayObject
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

    public function getLocation(): CarRentalBookingDataRentalEndpointLocation
    {
        return $this->location;
    }

    public function setLocation(CarRentalBookingDataRentalEndpointLocation $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    public function getTime(): CarRentalBookingDataRentalEndpointTime
    {
        return $this->time;
    }

    public function setTime(CarRentalBookingDataRentalEndpointTime $time): self
    {
        $this->initialized['time'] = true;
        $this->time = $time;

        return $this;
    }
}