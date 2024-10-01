<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class SpendControlRequest extends \ArrayObject
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
     * Spend limit refresh frequency
     * - MONTHLY: The spend limit refreshes every month
     * - QUARTERLY: The spend limit refreshes every quarter
     * - YEARLY: The spend limit refreshes every year
     * - ONE_TIME: The limit does not refresh.
     *
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
     * Spend limit refresh frequency
     * - MONTHLY: The spend limit refreshes every month
     * - QUARTERLY: The spend limit refreshes every quarter
     * - YEARLY: The spend limit refreshes every year
     * - ONE_TIME: The limit does not refresh.
     */
    public function getSpendDuration(): string
    {
        return $this->spendDuration;
    }

    /**
     * Spend limit refresh frequency
     * - MONTHLY: The spend limit refreshes every month
     * - QUARTERLY: The spend limit refreshes every quarter
     * - YEARLY: The spend limit refreshes every year
     * - ONE_TIME: The limit does not refresh.
     */
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

    public function getLockAfterDate(): ?\DateTime
    {
        return $this->lockAfterDate;
    }

    public function setLockAfterDate(?\DateTime $lockAfterDate): self
    {
        $this->initialized['lockAfterDate'] = true;
        $this->lockAfterDate = $lockAfterDate;

        return $this;
    }
}
