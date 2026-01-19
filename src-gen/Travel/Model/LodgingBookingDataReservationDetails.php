<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class LodgingBookingDataReservationDetails extends \ArrayObject
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
     * Confirmation code provided by the vendor.
     *
     * @var string|null
     */
    protected $confirmationCode;
    /**
     * @var LodgingBookingDataReservationDetailsCheckInTime
     */
    protected $checkInTime;
    /**
     * @var LodgingBookingDataReservationDetailsCheckoutTime
     */
    protected $checkoutTime;
    /**
     * @var LodgingBookingDataReservationDetailsRoom
     */
    protected $room;
    /**
     * Confirmation code provided by the vendor.
     *
     * @return string|null
     */
    public function getConfirmationCode(): ?string
    {
        return $this->confirmationCode;
    }
    /**
     * Confirmation code provided by the vendor.
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
     * @return LodgingBookingDataReservationDetailsCheckInTime
     */
    public function getCheckInTime(): LodgingBookingDataReservationDetailsCheckInTime
    {
        return $this->checkInTime;
    }
    /**
     * @param LodgingBookingDataReservationDetailsCheckInTime $checkInTime
     *
     * @return self
     */
    public function setCheckInTime(LodgingBookingDataReservationDetailsCheckInTime $checkInTime): self
    {
        $this->initialized['checkInTime'] = true;
        $this->checkInTime = $checkInTime;
        return $this;
    }
    /**
     * @return LodgingBookingDataReservationDetailsCheckoutTime
     */
    public function getCheckoutTime(): LodgingBookingDataReservationDetailsCheckoutTime
    {
        return $this->checkoutTime;
    }
    /**
     * @param LodgingBookingDataReservationDetailsCheckoutTime $checkoutTime
     *
     * @return self
     */
    public function setCheckoutTime(LodgingBookingDataReservationDetailsCheckoutTime $checkoutTime): self
    {
        $this->initialized['checkoutTime'] = true;
        $this->checkoutTime = $checkoutTime;
        return $this;
    }
    /**
     * @return LodgingBookingDataReservationDetailsRoom
     */
    public function getRoom(): LodgingBookingDataReservationDetailsRoom
    {
        return $this->room;
    }
    /**
     * @param LodgingBookingDataReservationDetailsRoom $room
     *
     * @return self
     */
    public function setRoom(LodgingBookingDataReservationDetailsRoom $room): self
    {
        $this->initialized['room'] = true;
        $this->room = $room;
        return $this;
    }
}