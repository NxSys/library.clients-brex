<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class AirBookingData extends \ArrayObject
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
     * The journeys that make up this booking.
     *
     * @var list<AirBookingDataJourney>
     */
    protected $journeys;
    /**
     * The flight tickets in this booking.
     *
     * @var list<AirBookingDataFlightTicket>
     */
    protected $tickets;
    /**
     * @var AirBookingDataRedressNumber
     */
    protected $redressNumber;
    /**
     * @var AirBookingDataKnownTravelerNumber
     */
    protected $knownTravelerNumber;
    /**
     * @var string
     */
    protected $type;
    /**
     * The journeys that make up this booking.
     *
     * @return list<AirBookingDataJourney>
     */
    public function getJourneys(): array
    {
        return $this->journeys;
    }
    /**
     * The journeys that make up this booking.
     *
     * @param list<AirBookingDataJourney> $journeys
     *
     * @return self
     */
    public function setJourneys(array $journeys): self
    {
        $this->initialized['journeys'] = true;
        $this->journeys = $journeys;
        return $this;
    }
    /**
     * The flight tickets in this booking.
     *
     * @return list<AirBookingDataFlightTicket>
     */
    public function getTickets(): array
    {
        return $this->tickets;
    }
    /**
     * The flight tickets in this booking.
     *
     * @param list<AirBookingDataFlightTicket> $tickets
     *
     * @return self
     */
    public function setTickets(array $tickets): self
    {
        $this->initialized['tickets'] = true;
        $this->tickets = $tickets;
        return $this;
    }
    /**
     * @return AirBookingDataRedressNumber
     */
    public function getRedressNumber(): AirBookingDataRedressNumber
    {
        return $this->redressNumber;
    }
    /**
     * @param AirBookingDataRedressNumber $redressNumber
     *
     * @return self
     */
    public function setRedressNumber(AirBookingDataRedressNumber $redressNumber): self
    {
        $this->initialized['redressNumber'] = true;
        $this->redressNumber = $redressNumber;
        return $this;
    }
    /**
     * @return AirBookingDataKnownTravelerNumber
     */
    public function getKnownTravelerNumber(): AirBookingDataKnownTravelerNumber
    {
        return $this->knownTravelerNumber;
    }
    /**
     * @param AirBookingDataKnownTravelerNumber $knownTravelerNumber
     *
     * @return self
     */
    public function setKnownTravelerNumber(AirBookingDataKnownTravelerNumber $knownTravelerNumber): self
    {
        $this->initialized['knownTravelerNumber'] = true;
        $this->knownTravelerNumber = $knownTravelerNumber;
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