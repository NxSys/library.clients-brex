<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class AirBookingDataFlightOperatingFlight extends \ArrayObject
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
     * The IATA code for the airline.
     *
     * @var string
     */
    protected $airlineCode;
    /**
     * The number of the flight.
     *
     * @var string
     */
    protected $number;
    /**
     * The name of the airline.
     *
     * @var string|null
     */
    protected $airlineName;
    /**
     * The IATA code for the airline.
     *
     * @return string
     */
    public function getAirlineCode(): string
    {
        return $this->airlineCode;
    }
    /**
     * The IATA code for the airline.
     *
     * @param string $airlineCode
     *
     * @return self
     */
    public function setAirlineCode(string $airlineCode): self
    {
        $this->initialized['airlineCode'] = true;
        $this->airlineCode = $airlineCode;
        return $this;
    }
    /**
     * The number of the flight.
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * The number of the flight.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * The name of the airline.
     *
     * @return string|null
     */
    public function getAirlineName(): ?string
    {
        return $this->airlineName;
    }
    /**
     * The name of the airline.
     *
     * @param string|null $airlineName
     *
     * @return self
     */
    public function setAirlineName(?string $airlineName): self
    {
        $this->initialized['airlineName'] = true;
        $this->airlineName = $airlineName;
        return $this;
    }
}