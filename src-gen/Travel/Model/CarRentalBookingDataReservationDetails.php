<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class CarRentalBookingDataReservationDetails extends \ArrayObject
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
     * The confirmation code given by the vendor.
     *
     * @var string|null
     */
    protected $confirmationCode;
    /**
     * @var CarRentalBookingDataReservationDetailsPickup
     */
    protected $pickup;
    /**
     * @var CarRentalBookingDataReservationDetailsDropOff
     */
    protected $dropOff;
    /**
     * Name of car rental company.
     *
     * @var string|null
     */
    protected $rentalCompany;
    /**
     * The confirmation code given by the vendor.
     *
     * @return string|null
     */
    public function getConfirmationCode(): ?string
    {
        return $this->confirmationCode;
    }
    /**
     * The confirmation code given by the vendor.
     *
     * @param string|null $confirmationCode
     *
     * @return self
     */
    public function setConfirmationCode(?string $confirmationCode): self
    {
        $this->initialized['confirmationCode'] = true;
        $this->confirmationCode = $confirmationCode;
        return $this;
    }
    /**
     * @return CarRentalBookingDataReservationDetailsPickup
     */
    public function getPickup(): CarRentalBookingDataReservationDetailsPickup
    {
        return $this->pickup;
    }
    /**
     * @param CarRentalBookingDataReservationDetailsPickup $pickup
     *
     * @return self
     */
    public function setPickup(CarRentalBookingDataReservationDetailsPickup $pickup): self
    {
        $this->initialized['pickup'] = true;
        $this->pickup = $pickup;
        return $this;
    }
    /**
     * @return CarRentalBookingDataReservationDetailsDropOff
     */
    public function getDropOff(): CarRentalBookingDataReservationDetailsDropOff
    {
        return $this->dropOff;
    }
    /**
     * @param CarRentalBookingDataReservationDetailsDropOff $dropOff
     *
     * @return self
     */
    public function setDropOff(CarRentalBookingDataReservationDetailsDropOff $dropOff): self
    {
        $this->initialized['dropOff'] = true;
        $this->dropOff = $dropOff;
        return $this;
    }
    /**
     * Name of car rental company.
     *
     * @return string|null
     */
    public function getRentalCompany(): ?string
    {
        return $this->rentalCompany;
    }
    /**
     * Name of car rental company.
     *
     * @param string|null $rentalCompany
     *
     * @return self
     */
    public function setRentalCompany(?string $rentalCompany): self
    {
        $this->initialized['rentalCompany'] = true;
        $this->rentalCompany = $rentalCompany;
        return $this;
    }
}