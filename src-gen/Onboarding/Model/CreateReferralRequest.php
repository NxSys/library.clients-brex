<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class CreateReferralRequest extends \ArrayObject
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
     * Referral code that attributes credit to you if the prospect signs up for a Brex account.
     *
     * @var string
     */
    protected $referralCode;
    /**
     * Required information about the referred prospect.
     *
     * @var Applicant
     */
    protected $applicant;
    /**
     * @var CreateReferralRequestBusiness
     */
    protected $business;
    /**
     * @var string
     */
    protected $contactPreference;
    /**
     * Referral code that attributes credit to you if the prospect signs up for a Brex account.
     *
     * @return string
     */
    public function getReferralCode(): string
    {
        return $this->referralCode;
    }
    /**
     * Referral code that attributes credit to you if the prospect signs up for a Brex account.
     *
     * @param string $referralCode
     *
     * @return self
     */
    public function setReferralCode(string $referralCode): self
    {
        $this->initialized['referralCode'] = true;
        $this->referralCode = $referralCode;
        return $this;
    }
    /**
     * Required information about the referred prospect.
     *
     * @return Applicant
     */
    public function getApplicant(): Applicant
    {
        return $this->applicant;
    }
    /**
     * Required information about the referred prospect.
     *
     * @param Applicant $applicant
     *
     * @return self
     */
    public function setApplicant(Applicant $applicant): self
    {
        $this->initialized['applicant'] = true;
        $this->applicant = $applicant;
        return $this;
    }
    /**
     * @return CreateReferralRequestBusiness
     */
    public function getBusiness(): CreateReferralRequestBusiness
    {
        return $this->business;
    }
    /**
     * @param CreateReferralRequestBusiness $business
     *
     * @return self
     */
    public function setBusiness(CreateReferralRequestBusiness $business): self
    {
        $this->initialized['business'] = true;
        $this->business = $business;
        return $this;
    }
    /**
     * @return string
     */
    public function getContactPreference(): string
    {
        return $this->contactPreference;
    }
    /**
     * @param string $contactPreference
     *
     * @return self
     */
    public function setContactPreference(string $contactPreference): self
    {
        $this->initialized['contactPreference'] = true;
        $this->contactPreference = $contactPreference;
        return $this;
    }
}