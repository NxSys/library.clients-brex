<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class CreateVendorRequest extends \ArrayObject
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
     * Name for vendor. The name must be unique.
     *
     * @var string
     */
    protected $companyName;
    /**
     * Email for vendor.
     *
     * @var string|null
     */
    protected $email;
    /**
     * Phone number for vendor.
     *
     * @var string|null
     */
    protected $phone;
    /**
     * Payment accounts associated with the vendor.
     *
     * @var list<PaymentAccountRequest>|null
     */
    protected $paymentAccounts;
    /**
     * Name for vendor. The name must be unique.
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
     * Name for vendor. The name must be unique.
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Email for vendor.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Email for vendor.
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
     * Phone number for vendor.
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * Phone number for vendor.
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
    /**
     * Payment accounts associated with the vendor.
     *
     * @return list<PaymentAccountRequest>|null
     */
    public function getPaymentAccounts(): ?array
    {
        return $this->paymentAccounts;
    }
    /**
     * Payment accounts associated with the vendor.
     *
     * @param list<PaymentAccountRequest>|null $paymentAccounts
     *
     * @return self
     */
    public function setPaymentAccounts(?array $paymentAccounts): self
    {
        $this->initialized['paymentAccounts'] = true;
        $this->paymentAccounts = $paymentAccounts;
        return $this;
    }
}