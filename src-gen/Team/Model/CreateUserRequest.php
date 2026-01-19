<?php

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class CreateUserRequest extends \ArrayObject
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
    protected $firstName;
    /**
     * @var string
     */
    protected $lastName;
    /**
     * @var string
     */
    protected $email;
    /**
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
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
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
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
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
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
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
     * @return string|null
     */
    public function getManagerId(): ?string
    {
        return $this->managerId;
    }
    /**
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