<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class LodgingBookingDataLodgingDetailsContactInformation extends \ArrayObject
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
     * The phone number of the venue.
     *
     * @var string|null
     */
    protected $phone;
    /**
     * The fax number of the venue.
     *
     * @var string|null
     */
    protected $fax;
    /**
     * The email address of the venue.
     *
     * @var string|null
     */
    protected $email;

    /**
     * The phone number of the venue.
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * The phone number of the venue.
     */
    public function setPhone(?string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;

        return $this;
    }

    /**
     * The fax number of the venue.
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * The fax number of the venue.
     */
    public function setFax(?string $fax): self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;

        return $this;
    }

    /**
     * The email address of the venue.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The email address of the venue.
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }
}
