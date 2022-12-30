<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class UpdateVendorRequest extends \ArrayObject
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
     * Name for vendor.
     *
     * @var string|null
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
     * To update payment instruments, we require the entire payload for each payment instrument that is being updated.
     *
     * @var PaymentAccountRequest[]|null
     */
    protected $paymentAccounts;

    /**
     * Name for vendor.
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * Name for vendor.
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Email for vendor.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Email for vendor.
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * Phone number for vendor.
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Phone number for vendor.
     */
    public function setPhone(?string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;

        return $this;
    }

    /**
     * To update payment instruments, we require the entire payload for each payment instrument that is being updated.
     *
     * @return PaymentAccountRequest[]|null
     */
    public function getPaymentAccounts(): ?array
    {
        return $this->paymentAccounts;
    }

    /**
     * To update payment instruments, we require the entire payload for each payment instrument that is being updated.
     *
     * @param PaymentAccountRequest[]|null $paymentAccounts
     */
    public function setPaymentAccounts(?array $paymentAccounts): self
    {
        $this->initialized['paymentAccounts'] = true;
        $this->paymentAccounts = $paymentAccounts;

        return $this;
    }
}