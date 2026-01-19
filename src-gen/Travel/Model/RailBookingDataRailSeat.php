<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class RailBookingDataRailSeat extends \ArrayObject
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
     * The number of the coach.
     *
     * @var string|null
     */
    protected $coachNumber;
    /**
     * The number of the seat.
     *
     * @var string|null
     */
    protected $seatNumber;
    /**
     * The number of the coach.
     *
     * @return string|null
     */
    public function getCoachNumber(): ?string
    {
        return $this->coachNumber;
    }
    /**
     * The number of the coach.
     *
     * @param string|null $coachNumber
     *
     * @return self
     */
    public function setCoachNumber(?string $coachNumber): self
    {
        $this->initialized['coachNumber'] = true;
        $this->coachNumber = $coachNumber;
        return $this;
    }
    /**
     * The number of the seat.
     *
     * @return string|null
     */
    public function getSeatNumber(): ?string
    {
        return $this->seatNumber;
    }
    /**
     * The number of the seat.
     *
     * @param string|null $seatNumber
     *
     * @return self
     */
    public function setSeatNumber(?string $seatNumber): self
    {
        $this->initialized['seatNumber'] = true;
        $this->seatNumber = $seatNumber;
        return $this;
    }
}