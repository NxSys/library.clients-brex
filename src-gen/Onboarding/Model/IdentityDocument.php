<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class IdentityDocument extends \ArrayObject
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
     * Country where the identity document was issued.
     *
     * @var string
     */
    protected $country;
    /**
     * Either a US SSN or US/international passport.
     *
     * @var string
     */
    protected $type;
    /**
     * US SSN or passport number.
     *
     * @var string
     */
    protected $number;
    /**
     * Country where the identity document was issued.
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
    /**
     * Country where the identity document was issued.
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * Either a US SSN or US/international passport.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Either a US SSN or US/international passport.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * US SSN or passport number.
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * US SSN or passport number.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
}