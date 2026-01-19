<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class Vendor extends \ArrayObject
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
     * The unique identifier for the vendor
     *
     * @var string
     */
    protected $id;
    /**
     * The name of the vendor
     *
     * @var string
     */
    protected $name;
    /**
     * The name of the contact for the vendor
     *
     * @var string|null
     */
    protected $contactName;
    /**
     * The email for the vendor
     *
     * @var string|null
     */
    protected $email;
    /**
     * The website of the vendor
     *
     * @var string|null
     */
    protected $website;
    /**
     * The phone number for the vendor
     *
     * @var string|null
     */
    protected $phone;
    /**
     * The unique identifier for the vendor
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The unique identifier for the vendor
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
     * The name of the vendor
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the vendor
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The name of the contact for the vendor
     *
     * @return string|null
     */
    public function getContactName(): ?string
    {
        return $this->contactName;
    }
    /**
     * The name of the contact for the vendor
     *
     * @param string|null $contactName
     *
     * @return self
     */
    public function setContactName(?string $contactName): self
    {
        $this->initialized['contactName'] = true;
        $this->contactName = $contactName;
        return $this;
    }
    /**
     * The email for the vendor
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * The email for the vendor
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The website of the vendor
     *
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }
    /**
     * The website of the vendor
     *
     * @param string|null $website
     *
     * @return self
     */
    public function setWebsite(?string $website): self
    {
        $this->initialized['website'] = true;
        $this->website = $website;
        return $this;
    }
    /**
     * The phone number for the vendor
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * The phone number for the vendor
     *
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
}