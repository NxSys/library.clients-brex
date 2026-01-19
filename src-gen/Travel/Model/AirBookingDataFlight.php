<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class AirBookingDataFlight extends \ArrayObject
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
     * The place where a flight departs from or arrives at.
     *
     * @var AirBookingDataFlightEndpoint
     */
    protected $origin;
    /**
     * The place where a flight departs from or arrives at.
     *
     * @var AirBookingDataFlightEndpoint
     */
    protected $destination;
    /**
     * @var AirBookingDataFlightDepartureTime
     */
    protected $departureTime;
    /**
     * @var AirBookingDataFlightArrivalTime
     */
    protected $arrivalTime;
    /**
     * The duration of the flight in the ISO 8601 PnYnMnDTnHnMnS format.
     *
     * @var string|null
     */
    protected $duration;
    /**
     * The airline confirmation code.
     *
     * @var string|null
     */
    protected $confirmationCode;
    /**
     * @var string
     */
    protected $cabinClass;
    /**
     * @var AirBookingDataFlightMarketingFlight
     */
    protected $marketingFlight;
    /**
     * @var AirBookingDataFlightOperatingFlight
     */
    protected $operatingFlight;
    /**
     * @var AirBookingDataFlightSeat
     */
    protected $seat;
    /**
     * The place where a flight departs from or arrives at.
     *
     * @return AirBookingDataFlightEndpoint
     */
    public function getOrigin(): AirBookingDataFlightEndpoint
    {
        return $this->origin;
    }
    /**
     * The place where a flight departs from or arrives at.
     *
     * @param AirBookingDataFlightEndpoint $origin
     *
     * @return self
     */
    public function setOrigin(AirBookingDataFlightEndpoint $origin): self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * The place where a flight departs from or arrives at.
     *
     * @return AirBookingDataFlightEndpoint
     */
    public function getDestination(): AirBookingDataFlightEndpoint
    {
        return $this->destination;
    }
    /**
     * The place where a flight departs from or arrives at.
     *
     * @param AirBookingDataFlightEndpoint $destination
     *
     * @return self
     */
    public function setDestination(AirBookingDataFlightEndpoint $destination): self
    {
        $this->initialized['destination'] = true;
        $this->destination = $destination;
        return $this;
    }
    /**
     * @return AirBookingDataFlightDepartureTime
     */
    public function getDepartureTime(): AirBookingDataFlightDepartureTime
    {
        return $this->departureTime;
    }
    /**
     * @param AirBookingDataFlightDepartureTime $departureTime
     *
     * @return self
     */
    public function setDepartureTime(AirBookingDataFlightDepartureTime $departureTime): self
    {
        $this->initialized['departureTime'] = true;
        $this->departureTime = $departureTime;
        return $this;
    }
    /**
     * @return AirBookingDataFlightArrivalTime
     */
    public function getArrivalTime(): AirBookingDataFlightArrivalTime
    {
        return $this->arrivalTime;
    }
    /**
     * @param AirBookingDataFlightArrivalTime $arrivalTime
     *
     * @return self
     */
    public function setArrivalTime(AirBookingDataFlightArrivalTime $arrivalTime): self
    {
        $this->initialized['arrivalTime'] = true;
        $this->arrivalTime = $arrivalTime;
        return $this;
    }
    /**
     * The duration of the flight in the ISO 8601 PnYnMnDTnHnMnS format.
     *
     * @return string|null
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }
    /**
     * The duration of the flight in the ISO 8601 PnYnMnDTnHnMnS format.
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
     * The airline confirmation code.
     *
     * @return string|null
     */
    public function getConfirmationCode(): ?string
    {
        return $this->confirmationCode;
    }
    /**
     * The airline confirmation code.
     *
     * @param string|null $confirmationCode
     *
     * @return self
     */
    public function setConfirmationCode(?string $confirmationCode): self
    {
        $this->initialized['confirmationCode'] = true;
        $this->confirmationCode = $confirmationCode;
        return $this;
    }
    /**
     * @return string
     */
    public function getCabinClass(): string
    {
        return $this->cabinClass;
    }
    /**
     * @param string $cabinClass
     *
     * @return self
     */
    public function setCabinClass(string $cabinClass): self
    {
        $this->initialized['cabinClass'] = true;
        $this->cabinClass = $cabinClass;
        return $this;
    }
    /**
     * @return AirBookingDataFlightMarketingFlight
     */
    public function getMarketingFlight(): AirBookingDataFlightMarketingFlight
    {
        return $this->marketingFlight;
    }
    /**
     * @param AirBookingDataFlightMarketingFlight $marketingFlight
     *
     * @return self
     */
    public function setMarketingFlight(AirBookingDataFlightMarketingFlight $marketingFlight): self
    {
        $this->initialized['marketingFlight'] = true;
        $this->marketingFlight = $marketingFlight;
        return $this;
    }
    /**
     * @return AirBookingDataFlightOperatingFlight
     */
    public function getOperatingFlight(): AirBookingDataFlightOperatingFlight
    {
        return $this->operatingFlight;
    }
    /**
     * @param AirBookingDataFlightOperatingFlight $operatingFlight
     *
     * @return self
     */
    public function setOperatingFlight(AirBookingDataFlightOperatingFlight $operatingFlight): self
    {
        $this->initialized['operatingFlight'] = true;
        $this->operatingFlight = $operatingFlight;
        return $this;
    }
    /**
     * @return AirBookingDataFlightSeat
     */
    public function getSeat(): AirBookingDataFlightSeat
    {
        return $this->seat;
    }
    /**
     * @param AirBookingDataFlightSeat $seat
     *
     * @return self
     */
    public function setSeat(AirBookingDataFlightSeat $seat): self
    {
        $this->initialized['seat'] = true;
        $this->seat = $seat;
        return $this;
    }
}