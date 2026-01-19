<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class AirBookingDataFlightSeat extends \ArrayObject
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
     * The seat number.
     *
     * @var string
     */
    protected $number;
    /**
     * @var string
     */
    protected $status;
    /**
     * The seat number.
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * The seat number.
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
}