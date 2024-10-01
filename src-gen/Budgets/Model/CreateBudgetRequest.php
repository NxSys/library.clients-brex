<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Budgets\Model;

class CreateBudgetRequest extends \ArrayObject
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
     * Name for the Budget.
     *
     * @var string
     */
    protected $name;
    /**
     * Description of what the Budget is used for.
     *
     * @var string
     */
    protected $description;
    /**
     * ID of parent Budget.
     *
     * @var string|null
     */
    protected $parentBudgetId;
    /**
     * User IDs of the owners of the Budget.
     *
     * @var list<string>|null
     */
    protected $ownerUserIds;
    /**
     * User IDs of the members of the Budget.
     *
     * @var list<string>|null
     */
    protected $memberUserIds;
    /**
     * Period type of the Budget e.g. MONTHLY.
     *
     * @var string
     */
    protected $periodType;
    /**
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     *
     * @var Money
     */
    protected $limit;
    /**
     * Whether the Budget limit blocks spend.
     *
     * @var string
     */
    protected $limitType;
    /**
     * Whether this Budget only can be spent from by cards provisioned by this Budget.
     *
     * @var string
     */
    protected $spendType;
    /**
     * The UTC date when the Budget should start counting.
     *
     * @var \DateTime|null
     */
    protected $startDate;
    /**
     * The UTC date when the Budget should stop counting.
     *
     * @var \DateTime|null
     */
    protected $endDate;

    /**
     * Name for the Budget.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name for the Budget.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Description of what the Budget is used for.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Description of what the Budget is used for.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * ID of parent Budget.
     */
    public function getParentBudgetId(): ?string
    {
        return $this->parentBudgetId;
    }

    /**
     * ID of parent Budget.
     */
    public function setParentBudgetId(?string $parentBudgetId): self
    {
        $this->initialized['parentBudgetId'] = true;
        $this->parentBudgetId = $parentBudgetId;

        return $this;
    }

    /**
     * User IDs of the owners of the Budget.
     *
     * @return list<string>|null
     */
    public function getOwnerUserIds(): ?array
    {
        return $this->ownerUserIds;
    }

    /**
     * User IDs of the owners of the Budget.
     *
     * @param list<string>|null $ownerUserIds
     */
    public function setOwnerUserIds(?array $ownerUserIds): self
    {
        $this->initialized['ownerUserIds'] = true;
        $this->ownerUserIds = $ownerUserIds;

        return $this;
    }

    /**
     * User IDs of the members of the Budget.
     *
     * @return list<string>|null
     */
    public function getMemberUserIds(): ?array
    {
        return $this->memberUserIds;
    }

    /**
     * User IDs of the members of the Budget.
     *
     * @param list<string>|null $memberUserIds
     */
    public function setMemberUserIds(?array $memberUserIds): self
    {
        $this->initialized['memberUserIds'] = true;
        $this->memberUserIds = $memberUserIds;

        return $this;
    }

    /**
     * Period type of the Budget e.g. MONTHLY.
     */
    public function getPeriodType(): string
    {
        return $this->periodType;
    }

    /**
     * Period type of the Budget e.g. MONTHLY.
     */
    public function setPeriodType(string $periodType): self
    {
        $this->initialized['periodType'] = true;
        $this->periodType = $periodType;

        return $this;
    }

    /**
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     */
    public function getLimit(): Money
    {
        return $this->limit;
    }

    /**
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     */
    public function setLimit(Money $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;

        return $this;
    }

    /**
     * Whether the Budget limit blocks spend.
     */
    public function getLimitType(): string
    {
        return $this->limitType;
    }

    /**
     * Whether the Budget limit blocks spend.
     */
    public function setLimitType(string $limitType): self
    {
        $this->initialized['limitType'] = true;
        $this->limitType = $limitType;

        return $this;
    }

    /**
     * Whether this Budget only can be spent from by cards provisioned by this Budget.
     */
    public function getSpendType(): string
    {
        return $this->spendType;
    }

    /**
     * Whether this Budget only can be spent from by cards provisioned by this Budget.
     */
    public function setSpendType(string $spendType): self
    {
        $this->initialized['spendType'] = true;
        $this->spendType = $spendType;

        return $this;
    }

    /**
     * The UTC date when the Budget should start counting.
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * The UTC date when the Budget should start counting.
     */
    public function setStartDate(?\DateTime $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * The UTC date when the Budget should stop counting.
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * The UTC date when the Budget should stop counting.
     */
    public function setEndDate(?\DateTime $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }
}
