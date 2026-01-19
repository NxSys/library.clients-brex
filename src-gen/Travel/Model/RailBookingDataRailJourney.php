<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class RailBookingDataRailJourney extends \ArrayObject
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
     * The legs that make up this journey.
     *
     * @var list<RailBookingDataRailLeg>
     */
    protected $legs;
    /**
     * The legs that make up this journey.
     *
     * @return list<RailBookingDataRailLeg>
     */
    public function getLegs(): array
    {
        return $this->legs;
    }
    /**
     * The legs that make up this journey.
     *
     * @param list<RailBookingDataRailLeg> $legs
     *
     * @return self
     */
    public function setLegs(array $legs): self
    {
        $this->initialized['legs'] = true;
        $this->legs = $legs;
        return $this;
    }
}