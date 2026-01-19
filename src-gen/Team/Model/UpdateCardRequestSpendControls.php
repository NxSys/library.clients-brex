<?php

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class UpdateCardRequestSpendControls extends \ArrayObject
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
     * @var SpendControlUpdateRequestSpendLimit
     */
    protected $spendLimit;
    /**
     * @var string
     */
    protected $spendDuration;
    /**
     * @var string|null
     */
    protected $reason;
    /**
     * @var \DateTime|null
     */
    protected $lockAfterDate;
    /**
     * @return SpendControlUpdateRequestSpendLimit
     */
    public function getSpendLimit(): SpendControlUpdateRequestSpendLimit
    {
        return $this->spendLimit;
    }
    /**
     * @param SpendControlUpdateRequestSpendLimit $spendLimit
     *
     * @return self
     */
    public function setSpendLimit(SpendControlUpdateRequestSpendLimit $spendLimit): self
    {
        $this->initialized['spendLimit'] = true;
        $this->spendLimit = $spendLimit;
        return $this;
    }
    /**
     * @return string
     */
    public function getSpendDuration(): string
    {
        return $this->spendDuration;
    }
    /**
     * @param string $spendDuration
     *
     * @return self
     */
    public function setSpendDuration(string $spendDuration): self
    {
        $this->initialized['spendDuration'] = true;
        $this->spendDuration = $spendDuration;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }
    /**
     * @param string|null $reason
     *
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getLockAfterDate(): ?\DateTime
    {
        return $this->lockAfterDate;
    }
    /**
     * @param \DateTime|null $lockAfterDate
     *
     * @return self
     */
    public function setLockAfterDate(?\DateTime $lockAfterDate): self
    {
        $this->initialized['lockAfterDate'] = true;
        $this->lockAfterDate = $lockAfterDate;
        return $this;
    }
}