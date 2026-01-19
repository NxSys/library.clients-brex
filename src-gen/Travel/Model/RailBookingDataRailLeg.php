<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class RailBookingDataRailLeg extends \ArrayObject
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
     * An endpoint in a rail leg.
     *
     * @var RailBookingDataRailStation
     */
    protected $origin;
    /**
     * An endpoint in a rail leg.
     *
     * @var RailBookingDataRailStation
     */
    protected $destination;
    /**
     * @var RailBookingDataRailLegDepartureTime
     */
    protected $departureTime;
    /**
     * @var RailBookingDataRailLegArrivalTime
     */
    protected $arrivalTime;
    /**
     * PT4h20M
     *
     * @var string|null
     */
    protected $duration;
    /**
     * @var RailBookingDataRailLegVehicle
     */
    protected $vehicle;
    /**
     * @var RailBookingDataRailLegSeat
     */
    protected $seat;
    /**
     * @var string
     */
    protected $railClass;
    /**
     * An endpoint in a rail leg.
     *
     * @return RailBookingDataRailStation
     */
    public function getOrigin(): RailBookingDataRailStation
    {
        return $this->origin;
    }
    /**
     * An endpoint in a rail leg.
     *
     * @param RailBookingDataRailStation $origin
     *
     * @return self
     */
    public function setOrigin(RailBookingDataRailStation $origin): self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * An endpoint in a rail leg.
     *
     * @return RailBookingDataRailStation
     */
    public function getDestination(): RailBookingDataRailStation
    {
        return $this->destination;
    }
    /**
     * An endpoint in a rail leg.
     *
     * @param RailBookingDataRailStation $destination
     *
     * @return self
     */
    public function setDestination(RailBookingDataRailStation $destination): self
    {
        $this->initialized['destination'] = true;
        $this->destination = $destination;
        return $this;
    }
    /**
     * @return RailBookingDataRailLegDepartureTime
     */
    public function getDepartureTime(): RailBookingDataRailLegDepartureTime
    {
        return $this->departureTime;
    }
    /**
     * @param RailBookingDataRailLegDepartureTime $departureTime
     *
     * @return self
     */
    public function setDepartureTime(RailBookingDataRailLegDepartureTime $departureTime): self
    {
        $this->initialized['departureTime'] = true;
        $this->departureTime = $departureTime;
        return $this;
    }
    /**
     * @return RailBookingDataRailLegArrivalTime
     */
    public function getArrivalTime(): RailBookingDataRailLegArrivalTime
    {
        return $this->arrivalTime;
    }
    /**
     * @param RailBookingDataRailLegArrivalTime $arrivalTime
     *
     * @return self
     */
    public function setArrivalTime(RailBookingDataRailLegArrivalTime $arrivalTime): self
    {
        $this->initialized['arrivalTime'] = true;
        $this->arrivalTime = $arrivalTime;
        return $this;
    }
    /**
     * PT4h20M
     *
     * @return string|null
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }
    /**
     * PT4h20M
     *
     * @param string|null $duration
     *
     * @return self
     */
    public function setDuration(?string $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;
        return $this;
    }
    /**
     * @return RailBookingDataRailLegVehicle
     */
    public function getVehicle(): RailBookingDataRailLegVehicle
    {
        return $this->vehicle;
    }
    /**
     * @param RailBookingDataRailLegVehicle $vehicle
     *
     * @return self
     */
    public function setVehicle(RailBookingDataRailLegVehicle $vehicle): self
    {
        $this->initialized['vehicle'] = true;
        $this->vehicle = $vehicle;
        return $this;
    }
    /**
     * @return RailBookingDataRailLegSeat
     */
    public function getSeat(): RailBookingDataRailLegSeat
    {
        return $this->seat;
    }
    /**
     * @param RailBookingDataRailLegSeat $seat
     *
     * @return self
     */
    public function setSeat(RailBookingDataRailLegSeat $seat): self
    {
        $this->initialized['seat'] = true;
        $this->seat = $seat;
        return $this;
    }
    /**
     * @return string
     */
    public function getRailClass(): string
    {
        return $this->railClass;
    }
    /**
     * @param string $railClass
     *
     * @return self
     */
    public function setRailClass(string $railClass): self
    {
        $this->initialized['railClass'] = true;
        $this->railClass = $railClass;
        return $this;
    }
}