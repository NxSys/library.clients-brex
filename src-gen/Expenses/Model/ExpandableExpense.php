<?php

namespace NxSys\Library\Clients\Brex\API\Expenses\Model;

class ExpandableExpense extends \ArrayObject
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
     * Unique ID associated with the expense.
     *
     * @var string
     */
    protected $id;
    /**
     * The memo of the expense.
     *
     * @var string|null
     */
    protected $memo;
    /**
     * @var string|null
     */
    protected $locationId;
    /**
     * @var ExpandableExpenseLocation
     */
    protected $location;
    /**
     * @var string|null
     */
    protected $departmentId;
    /**
     * @var ExpandableExpenseDepartment
     */
    protected $department;
    /**
     * The last time the expense was updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var string
     */
    protected $category;
    /**
     * A list of receipts associated with the expense.
     *
     * @var list<Receipt>|null
     */
    protected $receipts;
    /**
     * Unique ID associated with the expense.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique ID associated with the expense.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The memo of the expense.
     *
     * @return string|null
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }
    /**
     * The memo of the expense.
     *
     * @param string|null $memo
     *
     * @return self
     */
    public function setMemo(?string $memo): self
    {
        $this->initialized['memo'] = true;
        $this->memo = $memo;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }
    /**
     * @param string|null $locationId
     *
     * @return self
     */
    public function setLocationId(?string $locationId): self
    {
        $this->initialized['locationId'] = true;
        $this->locationId = $locationId;
        return $this;
    }
    /**
     * @return ExpandableExpenseLocation
     */
    public function getLocation(): ExpandableExpenseLocation
    {
        return $this->location;
    }
    /**
     * @param ExpandableExpenseLocation $location
     *
     * @return self
     */
    public function setLocation(ExpandableExpenseLocation $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDepartmentId(): ?string
    {
        return $this->departmentId;
    }
    /**
     * @param string|null $departmentId
     *
     * @return self
     */
    public function setDepartmentId(?string $departmentId): self
    {
        $this->initialized['departmentId'] = true;
        $this->departmentId = $departmentId;
        return $this;
    }
    /**
     * @return ExpandableExpenseDepartment
     */
    public function getDepartment(): ExpandableExpenseDepartment
    {
        return $this->department;
    }
    /**
     * @param ExpandableExpenseDepartment $department
     *
     * @return self
     */
    public function setDepartment(ExpandableExpenseDepartment $department): self
    {
        $this->initialized['department'] = true;
        $this->department = $department;
        return $this;
    }
    /**
     * The last time the expense was updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The last time the expense was updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
    /**
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * A list of receipts associated with the expense.
     *
     * @return list<Receipt>|null
     */
    public function getReceipts(): ?array
    {
        return $this->receipts;
    }
    /**
     * A list of receipts associated with the expense.
     *
     * @param list<Receipt>|null $receipts
     *
     * @return self
     */
    public function setReceipts(?array $receipts): self
    {
        $this->initialized['receipts'] = true;
        $this->receipts = $receipts;
        return $this;
    }
}