<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class RailBookingDataVehicle extends \ArrayObject
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
     * The carrier that operates this leg. E.g. Amtrak, Thameslink.
     *
     * @var string|null
     */
    protected $carrier;
    /**
     * The timetable ID for the vehicle. The concept is similar to a flight number.
     *
     * @var string|null
     */
    protected $timetableId;
    /**
     * @var string
     */
    protected $type;
    /**
     * The carrier that operates this leg. E.g. Amtrak, Thameslink.
     *
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }
    /**
     * The carrier that operates this leg. E.g. Amtrak, Thameslink.
     *
     * @param string|null $carrier
     *
     * @return self
     */
    public function setCarrier(?string $carrier): self
    {
        $this->initialized['carrier'] = true;
        $this->carrier = $carrier;
        return $this;
    }
    /**
     * The timetable ID for the vehicle. The concept is similar to a flight number.
     *
     * @return string|null
     */
    public function getTimetableId(): ?string
    {
        return $this->timetableId;
    }
    /**
     * The timetable ID for the vehicle. The concept is similar to a flight number.
     *
     * @param string|null $timetableId
     *
     * @return self
     */
    public function setTimetableId(?string $timetableId): self
    {
        $this->initialized['timetableId'] = true;
        $this->timetableId = $timetableId;
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