<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class BeneficiaryBank extends \ArrayObject
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
     * @var string|null
     */
    protected $name;
    /**
     * @var BeneficiaryBankAddress
     */
    protected $address;
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return BeneficiaryBankAddress
     */
    public function getAddress(): BeneficiaryBankAddress
    {
        return $this->address;
    }
    /**
     * @param BeneficiaryBankAddress $address
     *
     * @return self
     */
    public function setAddress(BeneficiaryBankAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}