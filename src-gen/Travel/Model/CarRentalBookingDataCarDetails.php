<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class CarRentalBookingDataCarDetails extends \ArrayObject
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
     * The name of the car as displayed to the user.
     *
     * @var string
     */
    protected $displayName;
    /**
     * @var string
     */
    protected $carClass;
    /**
     * The name of the car as displayed to the user.
     *
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }
    /**
     * The name of the car as displayed to the user.
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName): self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * @return string
     */
    public function getCarClass(): string
    {
        return $this->carClass;
    }
    /**
     * @param string $carClass
     *
     * @return self
     */
    public function setCarClass(string $carClass): self
    {
        $this->initialized['carClass'] = true;
        $this->carClass = $carClass;
        return $this;
    }
}