<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class LodgingBookingDataReservationDetailsRoom extends \ArrayObject
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
     * The name of the room as displayed to the user.
     *
     * @var string|null
     */
    protected $displayName;
    /**
     * A description of the room.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The kind of bed.
     *
     * @var string|null
     */
    protected $bedType;
    /**
     * The number of beds.
     *
     * @var int|null
     */
    protected $bedCount;
    /**
     * The name of the room as displayed to the user.
     *
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }
    /**
     * The name of the room as displayed to the user.
     *
     * @param string|null $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName): self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * A description of the room.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * A description of the room.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The kind of bed.
     *
     * @return string|null
     */
    public function getBedType(): ?string
    {
        return $this->bedType;
    }
    /**
     * The kind of bed.
     *
     * @param string|null $bedType
     *
     * @return self
     */
    public function setBedType(?string $bedType): self
    {
        $this->initialized['bedType'] = true;
        $this->bedType = $bedType;
        return $this;
    }
    /**
     * The number of beds.
     *
     * @return int|null
     */
    public function getBedCount(): ?int
    {
        return $this->bedCount;
    }
    /**
     * The number of beds.
     *
     * @param int|null $bedCount
     *
     * @return self
     */
    public function setBedCount(?int $bedCount): self
    {
        $this->initialized['bedCount'] = true;
        $this->bedCount = $bedCount;
        return $this;
    }
}