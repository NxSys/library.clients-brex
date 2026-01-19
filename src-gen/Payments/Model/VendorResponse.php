<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class VendorResponse extends \ArrayObject
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
     * Vendor ID: Can be passed to /transfers endpoint to specify counterparty.
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $companyName;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var string|null
     */
    protected $phone;
    /**
     * @var list<PaymentAccountResponse>|null
     */
    protected $paymentAccounts;
    /**
     * Vendor ID: Can be passed to /transfers endpoint to specify counterparty.
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Vendor ID: Can be passed to /transfers endpoint to specify counterparty.
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
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
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
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
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
     * @return list<PaymentAccountResponse>|null
     */
    public function getPaymentAccounts(): ?array
    {
        return $this->paymentAccounts;
    }
    /**
     * @param list<PaymentAccountResponse>|null $paymentAccounts
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