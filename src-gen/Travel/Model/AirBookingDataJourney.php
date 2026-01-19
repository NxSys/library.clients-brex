<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class AirBookingDataJourney extends \ArrayObject
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
     * The flights that make up this journey.
     *
     * @var list<AirBookingDataFlight>
     */
    protected $flights;
    /**
     * @var string
     */
    protected $status;
    /**
     * The cabin name as shown by the airline.
     *
     * @var string|null
     */
    protected $cabinDisplayName;
    /**
     * The flights that make up this journey.
     *
     * @return list<AirBookingDataFlight>
     */
    public function getFlights(): array
    {
        return $this->flights;
    }
    /**
     * The flights that make up this journey.
     *
     * @param list<AirBookingDataFlight> $flights
     *
     * @return self
     */
    public function setFlights(array $flights): self
    {
        $this->initialized['flights'] = true;
        $this->flights = $flights;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The cabin name as shown by the airline.
     *
     * @return string|null
     */
    public function getCabinDisplayName(): ?string
    {
        return $this->cabinDisplayName;
    }
    /**
     * The cabin name as shown by the airline.
     *
     * @param string|null $cabinDisplayName
     *
     * @return self
     */
    public function setCabinDisplayName(?string $cabinDisplayName): self
    {
        $this->initialized['cabinDisplayName'] = true;
        $this->cabinDisplayName = $cabinDisplayName;
        return $this;
    }
}