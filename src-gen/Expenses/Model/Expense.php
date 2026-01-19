<?php

namespace NxSys\Library\Clients\Brex\API\Expenses\Model;

class Expense extends \ArrayObject
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
     * @var string|null
     */
    protected $departmentId;
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
}