<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class Referral extends \ArrayObject
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
     * Unique identifier for the referral.
     *
     * @var string
     */
    protected $id;
    /**
     * Signup URL to redirect prospects to complete their onboarding flow.
     * 
     * *Note*: Necessary disclosures must be shown when the prospect clicks on this link.
     * 
     *
     * @var string
     */
    protected $referralSignupUrl;
    /**
     * The time at which this referral link expires.
     *
     * @var \DateTime
     */
    protected $expiresAt;
    /**
     * Customer's email address registered for the Brex application. This field is available only if there's a signup completed.
     * 
     *
     * @var string|null
     */
    protected $customerEmail;
    /**
     * Status of the referral. `UNCLAIMED` or `EXPIRED` unless the customer completes signup. Customers are attributed once `ACTIVE` until the account is `CLOSED`.
     *
     * @var string
     */
    protected $status;
    /**
     * @var list<Product>
     */
    protected $products;
    /**
     * Unique identifier for the referral.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique identifier for the referral.
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
     * Signup URL to redirect prospects to complete their onboarding flow.
     * 
     * *Note*: Necessary disclosures must be shown when the prospect clicks on this link.
     * 
     *
     * @return string
     */
    public function getReferralSignupUrl(): string
    {
        return $this->referralSignupUrl;
    }
    /**
     * Signup URL to redirect prospects to complete their onboarding flow.
     *Note*: Necessary disclosures must be shown when the prospect clicks on this link.
     *
     * @param string $referralSignupUrl
     *
     * @return self
     */
    public function setReferralSignupUrl(string $referralSignupUrl): self
    {
        $this->initialized['referralSignupUrl'] = true;
        $this->referralSignupUrl = $referralSignupUrl;
        return $this;
    }
    /**
     * The time at which this referral link expires.
     *
     * @return \DateTime
     */
    public function getExpiresAt(): \DateTime
    {
        return $this->expiresAt;
    }
    /**
     * The time at which this referral link expires.
     *
     * @param \DateTime $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(\DateTime $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * Customer's email address registered for the Brex application. This field is available only if there's a signup completed.
     * 
     *
     * @return string|null
     */
    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }
    /**
     * Customer's email address registered for the Brex application. This field is available only if there's a signup completed.
     *
     * @param string|null $customerEmail
     *
     * @return self
     */
    public function setCustomerEmail(?string $customerEmail): self
    {
        $this->initialized['customerEmail'] = true;
        $this->customerEmail = $customerEmail;
        return $this;
    }
    /**
     * Status of the referral. `UNCLAIMED` or `EXPIRED` unless the customer completes signup. Customers are attributed once `ACTIVE` until the account is `CLOSED`.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Status of the referral. `UNCLAIMED` or `EXPIRED` unless the customer completes signup. Customers are attributed once `ACTIVE` until the account is `CLOSED`.
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
     * @return list<Product>
     */
    public function getProducts(): array
    {
        return $this->products;
    }
    /**
     * @param list<Product> $products
     *
     * @return self
     */
    public function setProducts(array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
}