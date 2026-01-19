<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class AccountingRecordDetailedUser extends \ArrayObject
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
     * The ID of the user
     *
     * @var string
     */
    protected $id;
    /**
     * The user's first name
     *
     * @var string
     */
    protected $firstName;
    /**
     * The user's last name
     *
     * @var string
     */
    protected $lastName;
    /**
     * The user's email address
     *
     * @var string
     */
    protected $email;
    /**
     * The user's role in the system
     *
     * @var string
     */
    protected $role;
    /**
     * The user's status in the system
     *
     * @var string
     */
    protected $status;
    /**
     * The ID of the user's manager
     *
     * @var string
     */
    protected $managerId;
    /**
     * The ID of the user's department
     *
     * @var string
     */
    protected $departmentId;
    /**
     * The user's department name
     *
     * @var string
     */
    protected $departmentName;
    /**
     * The ID of the user's location
     *
     * @var string
     */
    protected $locationId;
    /**
     * The user's location name
     *
     * @var string
     */
    protected $locationName;
    /**
     * The user's title ID
     *
     * @var string
     */
    protected $titleId;
    /**
     * The user's title display name
     *
     * @var string
     */
    protected $titleName;
    /**
     * The user's manager first name
     *
     * @var string
     */
    protected $managerFirstName;
    /**
     * The user's manager last name
     *
     * @var string
     */
    protected $managerLastName;
    /**
     * The user's manager title ID
     *
     * @var string
     */
    protected $managerTitleId;
    /**
     * The user's manager title display name
     *
     * @var string
     */
    protected $managerTitleName;
    /**
     * The ID of the user
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the user
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
     * The user's first name
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * The user's first name
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
     * The user's last name
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * The user's last name
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
     * The user's email address
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * The user's email address
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
     * The user's role in the system
     *
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * The user's role in the system
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * The user's status in the system
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The user's status in the system
     *
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
     * The ID of the user's manager
     *
     * @return string
     */
    public function getManagerId(): string
    {
        return $this->managerId;
    }
    /**
     * The ID of the user's manager
     *
     * @param string $managerId
     *
     * @return self
     */
    public function setManagerId(string $managerId): self
    {
        $this->initialized['managerId'] = true;
        $this->managerId = $managerId;
        return $this;
    }
    /**
     * The ID of the user's department
     *
     * @return string
     */
    public function getDepartmentId(): string
    {
        return $this->departmentId;
    }
    /**
     * The ID of the user's department
     *
     * @param string $departmentId
     *
     * @return self
     */
    public function setDepartmentId(string $departmentId): self
    {
        $this->initialized['departmentId'] = true;
        $this->departmentId = $departmentId;
        return $this;
    }
    /**
     * The user's department name
     *
     * @return string
     */
    public function getDepartmentName(): string
    {
        return $this->departmentName;
    }
    /**
     * The user's department name
     *
     * @param string $departmentName
     *
     * @return self
     */
    public function setDepartmentName(string $departmentName): self
    {
        $this->initialized['departmentName'] = true;
        $this->departmentName = $departmentName;
        return $this;
    }
    /**
     * The ID of the user's location
     *
     * @return string
     */
    public function getLocationId(): string
    {
        return $this->locationId;
    }
    /**
     * The ID of the user's location
     *
     * @param string $locationId
     *
     * @return self
     */
    public function setLocationId(string $locationId): self
    {
        $this->initialized['locationId'] = true;
        $this->locationId = $locationId;
        return $this;
    }
    /**
     * The user's location name
     *
     * @return string
     */
    public function getLocationName(): string
    {
        return $this->locationName;
    }
    /**
     * The user's location name
     *
     * @param string $locationName
     *
     * @return self
     */
    public function setLocationName(string $locationName): self
    {
        $this->initialized['locationName'] = true;
        $this->locationName = $locationName;
        return $this;
    }
    /**
     * The user's title ID
     *
     * @return string
     */
    public function getTitleId(): string
    {
        return $this->titleId;
    }
    /**
     * The user's title ID
     *
     * @param string $titleId
     *
     * @return self
     */
    public function setTitleId(string $titleId): self
    {
        $this->initialized['titleId'] = true;
        $this->titleId = $titleId;
        return $this;
    }
    /**
     * The user's title display name
     *
     * @return string
     */
    public function getTitleName(): string
    {
        return $this->titleName;
    }
    /**
     * The user's title display name
     *
     * @param string $titleName
     *
     * @return self
     */
    public function setTitleName(string $titleName): self
    {
        $this->initialized['titleName'] = true;
        $this->titleName = $titleName;
        return $this;
    }
    /**
     * The user's manager first name
     *
     * @return string
     */
    public function getManagerFirstName(): string
    {
        return $this->managerFirstName;
    }
    /**
     * The user's manager first name
     *
     * @param string $managerFirstName
     *
     * @return self
     */
    public function setManagerFirstName(string $managerFirstName): self
    {
        $this->initialized['managerFirstName'] = true;
        $this->managerFirstName = $managerFirstName;
        return $this;
    }
    /**
     * The user's manager last name
     *
     * @return string
     */
    public function getManagerLastName(): string
    {
        return $this->managerLastName;
    }
    /**
     * The user's manager last name
     *
     * @param string $managerLastName
     *
     * @return self
     */
    public function setManagerLastName(string $managerLastName): self
    {
        $this->initialized['managerLastName'] = true;
        $this->managerLastName = $managerLastName;
        return $this;
    }
    /**
     * The user's manager title ID
     *
     * @return string
     */
    public function getManagerTitleId(): string
    {
        return $this->managerTitleId;
    }
    /**
     * The user's manager title ID
     *
     * @param string $managerTitleId
     *
     * @return self
     */
    public function setManagerTitleId(string $managerTitleId): self
    {
        $this->initialized['managerTitleId'] = true;
        $this->managerTitleId = $managerTitleId;
        return $this;
    }
    /**
     * The user's manager title display name
     *
     * @return string
     */
    public function getManagerTitleName(): string
    {
        return $this->managerTitleName;
    }
    /**
     * The user's manager title display name
     *
     * @param string $managerTitleName
     *
     * @return self
     */
    public function setManagerTitleName(string $managerTitleName): self
    {
        $this->initialized['managerTitleName'] = true;
        $this->managerTitleName = $managerTitleName;
        return $this;
    }
}