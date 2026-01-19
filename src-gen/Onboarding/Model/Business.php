<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class Business extends \ArrayObject
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
     * Company legal name.
     *
     * @var string|null
     */
    protected $legalName;
    /**
     * @var string
     */
    protected $incorporationType;
    /**
     * Company Employer Identification Number(EIN).
     *
     * @var string|null
     */
    protected $employerIdentificationNumber;
    /**
     * Business website (or link to ecommerce store for sellers).
     *
     * @var string|null
     */
    protected $websiteUrl;
    /**
     * Brief description of the business activity.
     *
     * @var string|null
     */
    protected $activityDescription;
    /**
     * @var BusinessAddress
     */
    protected $address;
    /**
     * List of beneficial owners of the company
     *
     * @var list<BeneficialOwner>|null
     */
    protected $beneficialOwners;
    /**
     * @var BusinessAlternateAddress
     */
    protected $alternateAddress;
    /**
     * Company legal name.
     *
     * @return string|null
     */
    public function getLegalName(): ?string
    {
        return $this->legalName;
    }
    /**
     * Company legal name.
     *
     * @param string|null $legalName
     *
     * @return self
     */
    public function setLegalName(?string $legalName): self
    {
        $this->initialized['legalName'] = true;
        $this->legalName = $legalName;
        return $this;
    }
    /**
     * @return string
     */
    public function getIncorporationType(): string
    {
        return $this->incorporationType;
    }
    /**
     * @param string $incorporationType
     *
     * @return self
     */
    public function setIncorporationType(string $incorporationType): self
    {
        $this->initialized['incorporationType'] = true;
        $this->incorporationType = $incorporationType;
        return $this;
    }
    /**
     * Company Employer Identification Number(EIN).
     *
     * @return string|null
     */
    public function getEmployerIdentificationNumber(): ?string
    {
        return $this->employerIdentificationNumber;
    }
    /**
     * Company Employer Identification Number(EIN).
     *
     * @param string|null $employerIdentificationNumber
     *
     * @return self
     */
    public function setEmployerIdentificationNumber(?string $employerIdentificationNumber): self
    {
        $this->initialized['employerIdentificationNumber'] = true;
        $this->employerIdentificationNumber = $employerIdentificationNumber;
        return $this;
    }
    /**
     * Business website (or link to ecommerce store for sellers).
     *
     * @return string|null
     */
    public function getWebsiteUrl(): ?string
    {
        return $this->websiteUrl;
    }
    /**
     * Business website (or link to ecommerce store for sellers).
     *
     * @param string|null $websiteUrl
     *
     * @return self
     */
    public function setWebsiteUrl(?string $websiteUrl): self
    {
        $this->initialized['websiteUrl'] = true;
        $this->websiteUrl = $websiteUrl;
        return $this;
    }
    /**
     * Brief description of the business activity.
     *
     * @return string|null
     */
    public function getActivityDescription(): ?string
    {
        return $this->activityDescription;
    }
    /**
     * Brief description of the business activity.
     *
     * @param string|null $activityDescription
     *
     * @return self
     */
    public function setActivityDescription(?string $activityDescription): self
    {
        $this->initialized['activityDescription'] = true;
        $this->activityDescription = $activityDescription;
        return $this;
    }
    /**
     * @return BusinessAddress
     */
    public function getAddress(): BusinessAddress
    {
        return $this->address;
    }
    /**
     * @param BusinessAddress $address
     *
     * @return self
     */
    public function setAddress(BusinessAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * List of beneficial owners of the company
     *
     * @return list<BeneficialOwner>|null
     */
    public function getBeneficialOwners(): ?array
    {
        return $this->beneficialOwners;
    }
    /**
     * List of beneficial owners of the company
     *
     * @param list<BeneficialOwner>|null $beneficialOwners
     *
     * @return self
     */
    public function setBeneficialOwners(?array $beneficialOwners): self
    {
        $this->initialized['beneficialOwners'] = true;
        $this->beneficialOwners = $beneficialOwners;
        return $this;
    }
    /**
     * @return BusinessAlternateAddress
     */
    public function getAlternateAddress(): BusinessAlternateAddress
    {
        return $this->alternateAddress;
    }
    /**
     * @param BusinessAlternateAddress $alternateAddress
     *
     * @return self
     */
    public function setAlternateAddress(BusinessAlternateAddress $alternateAddress): self
    {
        $this->initialized['alternateAddress'] = true;
        $this->alternateAddress = $alternateAddress;
        return $this;
    }
}