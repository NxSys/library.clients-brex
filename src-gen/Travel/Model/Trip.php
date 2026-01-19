<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class Trip extends \ArrayObject
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
     * The ID of the trip.
     *
     * @var string
     */
    protected $id;
    /**
     * The time when the trip was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The time when the latest trip update happened.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * The name of the trip as seen in the dashboard.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The ID of the user who booked the trip. If the trip was created on copilot mode, this will be the ID of the user on behalf of whom the trip was booked.
     *
     * @var string
     */
    protected $bookerUserId;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var TripTraveler
     */
    protected $traveler;
    /**
     * The current version of the trip.
     *
     * @var int
     */
    protected $version;
    /**
     * The time when the trip became billable. If absent, the trip is currently not billable.
     *
     * @var \DateTime|null
     */
    protected $billableAt;
    /**
     * The time when the first booking in the trip starts.
     *
     * @var \DateTime|null
     */
    protected $startsAt;
    /**
     * The time when the last booking in the trip ends.
     *
     * @var \DateTime|null
     */
    protected $endsAt;
    /**
     * The ID of the trip.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the trip.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The time when the trip was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * The time when the trip was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The time when the latest trip update happened.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The time when the latest trip update happened.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * The name of the trip as seen in the dashboard.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The name of the trip as seen in the dashboard.
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
     * The ID of the user who booked the trip. If the trip was created on copilot mode, this will be the ID of the user on behalf of whom the trip was booked.
     *
     * @return string
     */
    public function getBookerUserId(): string
    {
        return $this->bookerUserId;
    }
    /**
     * The ID of the user who booked the trip. If the trip was created on copilot mode, this will be the ID of the user on behalf of whom the trip was booked.
     *
     * @param string $bookerUserId
     *
     * @return self
     */
    public function setBookerUserId(string $bookerUserId): self
    {
        $this->initialized['bookerUserId'] = true;
        $this->bookerUserId = $bookerUserId;
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
     * @return TripTraveler
     */
    public function getTraveler(): TripTraveler
    {
        return $this->traveler;
    }
    /**
     * @param TripTraveler $traveler
     *
     * @return self
     */
    public function setTraveler(TripTraveler $traveler): self
    {
        $this->initialized['traveler'] = true;
        $this->traveler = $traveler;
        return $this;
    }
    /**
     * The current version of the trip.
     *
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }
    /**
     * The current version of the trip.
     *
     * @param int $version
     *
     * @return self
     */
    public function setVersion(int $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * The time when the trip became billable. If absent, the trip is currently not billable.
     *
     * @return \DateTime|null
     */
    public function getBillableAt(): ?\DateTime
    {
        return $this->billableAt;
    }
    /**
     * The time when the trip became billable. If absent, the trip is currently not billable.
     *
     * @param \DateTime|null $billableAt
     *
     * @return self
     */
    public function setBillableAt(?\DateTime $billableAt): self
    {
        $this->initialized['billableAt'] = true;
        $this->billableAt = $billableAt;
        return $this;
    }
    /**
     * The time when the first booking in the trip starts.
     *
     * @return \DateTime|null
     */
    public function getStartsAt(): ?\DateTime
    {
        return $this->startsAt;
    }
    /**
     * The time when the first booking in the trip starts.
     *
     * @param \DateTime|null $startsAt
     *
     * @return self
     */
    public function setStartsAt(?\DateTime $startsAt): self
    {
        $this->initialized['startsAt'] = true;
        $this->startsAt = $startsAt;
        return $this;
    }
    /**
     * The time when the last booking in the trip ends.
     *
     * @return \DateTime|null
     */
    public function getEndsAt(): ?\DateTime
    {
        return $this->endsAt;
    }
    /**
     * The time when the last booking in the trip ends.
     *
     * @param \DateTime|null $endsAt
     *
     * @return self
     */
    public function setEndsAt(?\DateTime $endsAt): self
    {
        $this->initialized['endsAt'] = true;
        $this->endsAt = $endsAt;
        return $this;
    }
}