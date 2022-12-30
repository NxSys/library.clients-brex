<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Budgets\Model;

class Money extends \ArrayObject
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
     * The amount of money, in the smallest denomination of the currency indicated by currency. For example, when currency is USD, amount is in cents.
     *
     * @var int
     */
    protected $amount;
    /**
     * The type of currency, in ISO 4217 format. Default to USD if not specified.
     *
     * @var string|null
     */
    protected $currency;

    /**
     * The amount of money, in the smallest denomination of the currency indicated by currency. For example, when currency is USD, amount is in cents.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * The amount of money, in the smallest denomination of the currency indicated by currency. For example, when currency is USD, amount is in cents.
     */
    public function setAmount(int $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * The type of currency, in ISO 4217 format. Default to USD if not specified.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * The type of currency, in ISO 4217 format. Default to USD if not specified.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}
