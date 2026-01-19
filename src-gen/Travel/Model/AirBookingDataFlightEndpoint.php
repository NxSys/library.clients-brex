<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class AirBookingDataFlightEndpoint extends \ArrayObject
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
     * The 3-letter IATA code of the airport.
     *
     * @var string
     */
    protected $airportCode;
    /**
     * The terminal name and/or number.
     *
     * @var string|null
     */
    protected $terminal;
    /**
     * The gate for boarding or leaving the plane.
     *
     * @var string|null
     */
    protected $gate;
    /**
     * @var AirBookingDataFlightEndpointAirportLocation
     */
    protected $airportLocation;
    /**
     * The 3-letter IATA code of the airport.
     *
     * @return string
     */
    public function getAirportCode(): string
    {
        return $this->airportCode;
    }
    /**
     * The 3-letter IATA code of the airport.
     *
     * @param string $airportCode
     *
     * @return self
     */
    public function setAirportCode(string $airportCode): self
    {
        $this->initialized['airportCode'] = true;
        $this->airportCode = $airportCode;
        return $this;
    }
    /**
     * The terminal name and/or number.
     *
     * @return string|null
     */
    public function getTerminal(): ?string
    {
        return $this->terminal;
    }
    /**
     * The terminal name and/or number.
     *
     * @param string|null $terminal
     *
     * @return self
     */
    public function setTerminal(?string $terminal): self
    {
        $this->initialized['terminal'] = true;
        $this->terminal = $terminal;
        return $this;
    }
    /**
     * The gate for boarding or leaving the plane.
     *
     * @return string|null
     */
    public function getGate(): ?string
    {
        return $this->gate;
    }
    /**
     * The gate for boarding or leaving the plane.
     *
     * @param string|null $gate
     *
     * @return self
     */
    public function setGate(?string $gate): self
    {
        $this->initialized['gate'] = true;
        $this->gate = $gate;
        return $this;
    }
    /**
     * @return AirBookingDataFlightEndpointAirportLocation
     */
    public function getAirportLocation(): AirBookingDataFlightEndpointAirportLocation
    {
        return $this->airportLocation;
    }
    /**
     * @param AirBookingDataFlightEndpointAirportLocation $airportLocation
     *
     * @return self
     */
    public function setAirportLocation(AirBookingDataFlightEndpointAirportLocation $airportLocation): self
    {
        $this->initialized['airportLocation'] = true;
        $this->airportLocation = $airportLocation;
        return $this;
    }
}