<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class LodgingBookingDataReservationDetailsCheckInTime extends \ArrayObject
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
     * The local time in the relevant location in the ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $localTime;
    /**
     * An ISO 8601 timestamp.
     *
     * @var \DateTime|null
     */
    protected $timestamp;
    /**
     * The local time in the relevant location in the ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getLocalTime(): \DateTime
    {
        return $this->localTime;
    }
    /**
     * The local time in the relevant location in the ISO 8601 format.
     *
     * @param \DateTime $localTime
     *
     * @return self
     */
    public function setLocalTime(\DateTime $localTime): self
    {
        $this->initialized['localTime'] = true;
        $this->localTime = $localTime;
        return $this;
    }
    /**
     * An ISO 8601 timestamp.
     *
     * @return \DateTime|null
     */
    public function getTimestamp(): ?\DateTime
    {
        return $this->timestamp;
    }
    /**
     * An ISO 8601 timestamp.
     *
     * @param \DateTime|null $timestamp
     *
     * @return self
     */
    public function setTimestamp(?\DateTime $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
}