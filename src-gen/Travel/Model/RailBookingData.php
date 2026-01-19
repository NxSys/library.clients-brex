<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class RailBookingData extends \ArrayObject
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
     * @var list<RailBookingDataRailJourney>
     */
    protected $journeys;
    /**
     * @var string
     */
    protected $type;
    /**
     * The journeys that make up this booking.
     *
     * @return list<RailBookingDataRailJourney>
     */
    public function getJourneys(): array
    {
        return $this->journeys;
    }
    /**
     * The journeys that make up this booking.
     *
     * @param list<RailBookingDataRailJourney> $journeys
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