<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class TravelerName extends \ArrayObject
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
     * The traveler's first name.
     *
     * @var string
     */
    protected $firstName;
    /**
     * The traveler's middle name.
     *
     * @var string|null
     */
    protected $middleName;
    /**
     * The traveler's last name.
     *
     * @var string
     */
    protected $lastName;
    /**
     * The suffix in the traveler's name.
     *
     * @var string|null
     */
    protected $suffix;

    /**
     * The traveler's first name.
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * The traveler's first name.
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The traveler's middle name.
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    /**
     * The traveler's middle name.
     */
    public function setMiddleName(?string $middleName): self
    {
        $this->initialized['middleName'] = true;
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * The traveler's last name.
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * The traveler's last name.
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * The suffix in the traveler's name.
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    /**
     * The suffix in the traveler's name.
     */
    public function setSuffix(?string $suffix): self
    {
        $this->initialized['suffix'] = true;
        $this->suffix = $suffix;

        return $this;
    }
}
