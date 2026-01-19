<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class Account extends \ArrayObject
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
     * Brex Cash management account ID.
     *
     * @var string
     */
    protected $id;
    /**
     * @var AccountInstructions
     */
    protected $instructions;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Brex Cash management account ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Brex Cash management account ID.
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
     * @return AccountInstructions
     */
    public function getInstructions(): AccountInstructions
    {
        return $this->instructions;
    }
    /**
     * @param AccountInstructions $instructions
     *
     * @return self
     */
    public function setInstructions(AccountInstructions $instructions): self
    {
        $this->initialized['instructions'] = true;
        $this->instructions = $instructions;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
}