<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class Traveler extends \ArrayObject
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
     * Whether the trip is for an employee or a guest.
     *
     * @var string
     */
    protected $type;
    /**
     * @var TravelerName
     */
    protected $name;
    /**
     * If the traveler is a guest, this is their email.
     *
     * @var string|null
     */
    protected $guestEmail;
    /**
     * If the traveler is an employee, this is their user ID.
     *
     * @var string|null
     */
    protected $userId;
    /**
     * Whether the trip is for an employee or a guest.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Whether the trip is for an employee or a guest.
     *
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
    /**
     * @return TravelerName
     */
    public function getName(): TravelerName
    {
        return $this->name;
    }
    /**
     * @param TravelerName $name
     *
     * @return self
     */
    public function setName(TravelerName $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * If the traveler is a guest, this is their email.
     *
     * @return string|null
     */
    public function getGuestEmail(): ?string
    {
        return $this->guestEmail;
    }
    /**
     * If the traveler is a guest, this is their email.
     *
     * @param string|null $guestEmail
     *
     * @return self
     */
    public function setGuestEmail(?string $guestEmail): self
    {
        $this->initialized['guestEmail'] = true;
        $this->guestEmail = $guestEmail;
        return $this;
    }
    /**
     * If the traveler is an employee, this is their user ID.
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }
    /**
     * If the traveler is an employee, this is their user ID.
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
}