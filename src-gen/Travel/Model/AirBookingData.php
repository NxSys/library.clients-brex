<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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
     */
    public function setTickets(array $tickets): self
    {
        $this->initialized['tickets'] = true;
        $this->tickets = $tickets;

        return $this;
    }

    public function getRedressNumber(): AirBookingDataRedressNumber
    {
        return $this->redressNumber;
    }

    public function setRedressNumber(AirBookingDataRedressNumber $redressNumber): self
    {
        $this->initialized['redressNumber'] = true;
        $this->redressNumber = $redressNumber;

        return $this;
    }

    public function getKnownTravelerNumber(): AirBookingDataKnownTravelerNumber
    {
        return $this->knownTravelerNumber;
    }

    public function setKnownTravelerNumber(AirBookingDataKnownTravelerNumber $knownTravelerNumber): self
    {
        $this->initialized['knownTravelerNumber'] = true;
        $this->knownTravelerNumber = $knownTravelerNumber;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
