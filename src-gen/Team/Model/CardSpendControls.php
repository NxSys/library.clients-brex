<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class CardSpendControls extends \ArrayObject
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
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     *
     * @var Money
     */
    protected $spendLimit;
    /**
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     *
     * @var Money
     */
    protected $spendAvailable;
    /**
     * @var string
     */
    protected $spendDuration;
    /**
     * @var string|null
     */
    protected $reason;
    /**
     * The `lock_after_date` is in UTC.
     *
     * @var \DateTime|null
     */
    protected $lockAfterDate;

    /**
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     */
    public function getSpendLimit(): Money
    {
        return $this->spendLimit;
    }

    /**
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     */
    public function setSpendLimit(Money $spendLimit): self
    {
        $this->initialized['spendLimit'] = true;
        $this->spendLimit = $spendLimit;

        return $this;
    }

    /**
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     */
    public function getSpendAvailable(): Money
    {
        return $this->spendAvailable;
    }

    /**
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     */
    public function setSpendAvailable(Money $spendAvailable): self
    {
        $this->initialized['spendAvailable'] = true;
        $this->spendAvailable = $spendAvailable;

        return $this;
    }

    public function getSpendDuration(): string
    {
        return $this->spendDuration;
    }

    public function setSpendDuration(string $spendDuration): self
    {
        $this->initialized['spendDuration'] = true;
        $this->spendDuration = $spendDuration;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }

    /**
     * The `lock_after_date` is in UTC.
     */
    public function getLockAfterDate(): ?\DateTime
    {
        return $this->lockAfterDate;
    }

    /**
     * The `lock_after_date` is in UTC.
     */
    public function setLockAfterDate(?\DateTime $lockAfterDate): self
    {
        $this->initialized['lockAfterDate'] = true;
        $this->lockAfterDate = $lockAfterDate;

        return $this;
    }
}
