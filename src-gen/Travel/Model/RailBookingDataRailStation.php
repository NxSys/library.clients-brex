<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class RailBookingDataRailStation extends \ArrayObject
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
     * The name of the station.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var RailBookingDataRailStationLocation
     */
    protected $location;
    /**
     * @var string
     */
    protected $type;
    /**
     * The name of the station.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The name of the station.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return RailBookingDataRailStationLocation
     */
    public function getLocation(): RailBookingDataRailStationLocation
    {
        return $this->location;
    }
    /**
     * @param RailBookingDataRailStationLocation $location
     *
     * @return self
     */
    public function setLocation(RailBookingDataRailStationLocation $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
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