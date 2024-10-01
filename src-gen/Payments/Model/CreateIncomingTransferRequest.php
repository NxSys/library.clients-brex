<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class CreateIncomingTransferRequest extends \ArrayObject
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
     * Counterparty Details for the transfer.
     *
     * @var array<string, mixed>
     */
    protected $counterparty;
    /**
     * Receiving account details for the transfer.
     *
     * @var array<string, mixed>
     */
    protected $receivingAccount;
    /**
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     *
     * @var Money
     */
    protected $amount;
    /**
     * Description of the transfer for internal use. Not exposed externally.
     *
     * @var string
     */
    protected $description;

    /**
     * Counterparty Details for the transfer.
     *
     * @return array<string, mixed>
     */
    public function getCounterparty(): iterable
    {
        return $this->counterparty;
    }

    /**
     * Counterparty Details for the transfer.
     *
     * @param array<string, mixed> $counterparty
     */
    public function setCounterparty(iterable $counterparty): self
    {
        $this->initialized['counterparty'] = true;
        $this->counterparty = $counterparty;

        return $this;
    }

    /**
     * Receiving account details for the transfer.
     *
     * @return array<string, mixed>
     */
    public function getReceivingAccount(): iterable
    {
        return $this->receivingAccount;
    }

    /**
     * Receiving account details for the transfer.
     *
     * @param array<string, mixed> $receivingAccount
     */
    public function setReceivingAccount(iterable $receivingAccount): self
    {
        $this->initialized['receivingAccount'] = true;
        $this->receivingAccount = $receivingAccount;

        return $this;
    }

    /**
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     */
    public function getAmount(): Money
    {
        return $this->amount;
    }

    /**
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     */
    public function setAmount(Money $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * Description of the transfer for internal use. Not exposed externally.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Description of the transfer for internal use. Not exposed externally.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
