<?php

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class UserResponse extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * First name of the user
     *
     * @var string
     */
    protected $firstName;
    /**
     * Last name of the user
     *
     * @var string
     */
    protected $lastName;
    /**
     * Email address of the user
     *
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $status;
    /**
     * The user id of the manager of this user
     *
     * @var string|null
     */
    protected $managerId;
    /**
     * @var string|null
     */
    protected $departmentId;
    /**
     * @var string|null
     */
    protected $locationId;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
     * First name of the user
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * First name of the user
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Last name of the user
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * Last name of the user
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Email address of the user
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Email address of the user
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The user id of the manager of this user
     *
     * @return string|null
     */
    public function getManagerId(): ?string
    {
        return $this->managerId;
    }
    /**
     * The user id of the manager of this user
     *
     * @param string|null $managerId
     *
     * @return self
     */
    public function setManagerId(?string $managerId): self
    {
        $this->initialized['managerId'] = true;
        $this->managerId = $managerId;
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
}