<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Model;

class AirBookingDataFlightTicket extends \ArrayObject
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
     * The ticket number provided by the airline.
     *
     * @var string
     */
    protected $number;
    /**
     * The date when the ticket was issued.
     *
     * @var \DateTime|null
     */
    protected $issueDate;
    /**
     * The ticket number provided by the airline.
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * The ticket number provided by the airline.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * The date when the ticket was issued.
     *
     * @return \DateTime|null
     */
    public function getIssueDate(): ?\DateTime
    {
        return $this->issueDate;
    }
    /**
     * The date when the ticket was issued.
     *
     * @param \DateTime|null $issueDate
     *
     * @return self
     */
    public function setIssueDate(?\DateTime $issueDate): self
    {
        $this->initialized['issueDate'] = true;
        $this->issueDate = $issueDate;
        return $this;
    }
}