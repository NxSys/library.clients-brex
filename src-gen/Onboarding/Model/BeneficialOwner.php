<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class BeneficialOwner extends \ArrayObject
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
     * Legal full name.
     *
     * @var string
     */
    protected $legalName;
    /**
     * @var string
     */
    protected $companyRelationship;
    /**
     * Date of birth.
     *
     * @var \DateTime|null
     */
    protected $dateOfBirth;
    /**
     * @var BeneficialOwnerIdentityDocument
     */
    protected $identityDocument;
    /**
     * @var BeneficialOwnerAddress
     */
    protected $address;
    /**
     * When using `CONTROL` prong, the beneficial owner is a single individual with
     * significant responsibility to control, manage, or direct a legal entity customer. This includes, an
     * executive officer or senior manager (Chief Executive Officer, Chief Financial Officer, Chief
     * Operating Officer, President), or any other individual who regularly performs similar
     * functions.
     * 
     * Under the `OWNERSHIP` prong, a beneficial owner is each individual, if any, who, directly or
     * indirectly, through any contract, arrangement, understanding, relationship or otherwise, owns
     * 25 percent or more of the equity interests of a legal entity customer. If a trust owns directly
     * or indirectly, through any contract, arrangement, understanding, relationship or otherwise, 25
     * percent or more of the equity interests of a legal entity customer, the beneficial owner is the
     * trustee.
     * 
     * Under the `BOTH` prong, the beneficial owner represents both.
     * 
     *
     * @var string
     */
    protected $prong;
    /**
     * Legal full name.
     *
     * @return string
     */
    public function getLegalName(): string
    {
        return $this->legalName;
    }
    /**
     * Legal full name.
     *
     * @param string $legalName
     *
     * @return self
     */
    public function setLegalName(string $legalName): self
    {
        $this->initialized['legalName'] = true;
        $this->legalName = $legalName;
        return $this;
    }
    /**
     * @return string
     */
    public function getCompanyRelationship(): string
    {
        return $this->companyRelationship;
    }
    /**
     * @param string $companyRelationship
     *
     * @return self
     */
    public function setCompanyRelationship(string $companyRelationship): self
    {
        $this->initialized['companyRelationship'] = true;
        $this->companyRelationship = $companyRelationship;
        return $this;
    }
    /**
     * Date of birth.
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth(): ?\DateTime
    {
        return $this->dateOfBirth;
    }
    /**
     * Date of birth.
     *
     * @param \DateTime|null $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth(?\DateTime $dateOfBirth): self
    {
        $this->initialized['dateOfBirth'] = true;
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }
    /**
     * @return BeneficialOwnerIdentityDocument
     */
    public function getIdentityDocument(): BeneficialOwnerIdentityDocument
    {
        return $this->identityDocument;
    }
    /**
     * @param BeneficialOwnerIdentityDocument $identityDocument
     *
     * @return self
     */
    public function setIdentityDocument(BeneficialOwnerIdentityDocument $identityDocument): self
    {
        $this->initialized['identityDocument'] = true;
        $this->identityDocument = $identityDocument;
        return $this;
    }
    /**
     * @return BeneficialOwnerAddress
     */
    public function getAddress(): BeneficialOwnerAddress
    {
        return $this->address;
    }
    /**
     * @param BeneficialOwnerAddress $address
     *
     * @return self
     */
    public function setAddress(BeneficialOwnerAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * When using `CONTROL` prong, the beneficial owner is a single individual with
     * significant responsibility to control, manage, or direct a legal entity customer. This includes, an
     * executive officer or senior manager (Chief Executive Officer, Chief Financial Officer, Chief
     * Operating Officer, President), or any other individual who regularly performs similar
     * functions.
     * 
     * Under the `OWNERSHIP` prong, a beneficial owner is each individual, if any, who, directly or
     * indirectly, through any contract, arrangement, understanding, relationship or otherwise, owns
     * 25 percent or more of the equity interests of a legal entity customer. If a trust owns directly
     * or indirectly, through any contract, arrangement, understanding, relationship or otherwise, 25
     * percent or more of the equity interests of a legal entity customer, the beneficial owner is the
     * trustee.
     * 
     * Under the `BOTH` prong, the beneficial owner represents both.
     * 
     *
     * @return string
     */
    public function getProng(): string
    {
        return $this->prong;
    }
    /**
    * When using `CONTROL` prong, the beneficial owner is a single individual with 
    significant responsibility to control, manage, or direct a legal entity customer. This includes, an
    executive officer or senior manager (Chief Executive Officer, Chief Financial Officer, Chief
    Operating Officer, President), or any other individual who regularly performs similar
    functions. 
    
    Under the `OWNERSHIP` prong, a beneficial owner is each individual, if any, who, directly or
    indirectly, through any contract, arrangement, understanding, relationship or otherwise, owns
    25 percent or more of the equity interests of a legal entity customer. If a trust owns directly
    or indirectly, through any contract, arrangement, understanding, relationship or otherwise, 25
    percent or more of the equity interests of a legal entity customer, the beneficial owner is the
    trustee.
    
    Under the `BOTH` prong, the beneficial owner represents both.
    
    *
    * @param string $prong
    *
    * @return self
    */
    public function setProng(string $prong): self
    {
        $this->initialized['prong'] = true;
        $this->prong = $prong;
        return $this;
    }
}