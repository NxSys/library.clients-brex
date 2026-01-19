<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class Transfer extends \ArrayObject
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
     * Unique ID associated with the transfer
     *
     * @var string
     */
    protected $id;
    /**
     * @var TransferCounterparty
     */
    protected $counterparty;
    /**
     * Description of the transfer
     *
     * @var string|null
     */
    protected $description;
    /**
     * @var string
     */
    protected $paymentType;
    /**
     * 
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     * 
     *
     * @var Money
     */
    protected $amount;
    /**
     * Transaction processing date
     *
     * @var \DateTime|null
     */
    protected $processDate;
    /**
     * Originating account details for the transfer
     *
     * @var array<string, mixed>
     */
    protected $originatingAccount;
    /**
     * `PROCESSING`: We have started to process the sending or receiving of this transaction.
     * `SCHEDULED`: The transaction is scheduled to enter the `PROCESSING` status.
     * `PENDING_APPROVAL`: The transaction requires approval before it can enter the `SCHEDULED` or `PROCESSING` status.
     * `FAILED`: A grouping of multiple terminal states that prevented the transaction from completing.
     * This includes a a user-cancellation, approval being denied, insufficient funds, failed verifications, etc.
     * `PROCESSED`: The money movement has been fully completed, which could mean money sent has arrived.
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $cancellationReason;
    /**
     * Estimated delivery date for transfer
     *
     * @var \DateTime|null
     */
    protected $estimatedDeliveryDate;
    /**
     * User ID of the transfer initiator
     *
     * @var string|null
     */
    protected $creatorUserId;
    /**
     * Date of transfer creation
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Human readable name for the transaction
     *
     * @var string|null
     */
    protected $displayName;
    /**
     * External memo for the transfer. `Payment Instructions` for Wires and the `Entry Description` for ACH payments.
     * Must be at most 90 characters for `ACH` and `WIRE` transactions
     * and at most 40 characters for `CHEQUES`
     * 
     *
     * @var string|null
     */
    protected $externalMemo;
    /**
     * Unique ID associated with the transfer
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique ID associated with the transfer
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
     * @return TransferCounterparty
     */
    public function getCounterparty(): TransferCounterparty
    {
        return $this->counterparty;
    }
    /**
     * @param TransferCounterparty $counterparty
     *
     * @return self
     */
    public function setCounterparty(TransferCounterparty $counterparty): self
    {
        $this->initialized['counterparty'] = true;
        $this->counterparty = $counterparty;
        return $this;
    }
    /**
     * Description of the transfer
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Description of the transfer
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }
    /**
     * @param string $paymentType
     *
     * @return self
     */
    public function setPaymentType(string $paymentType): self
    {
        $this->initialized['paymentType'] = true;
        $this->paymentType = $paymentType;
        return $this;
    }
    /**
     * 
     * Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
     * of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
     * 
     *
     * @return Money
     */
    public function getAmount(): Money
    {
        return $this->amount;
    }
    /**
    * 
    Money fields can be signed or unsigned. Fields are signed (an unsigned value will be interpreted as positive). The amount of money will be represented in the smallest denomination
    of the currency indicated. For example, USD 7.00 will be represented in cents with an amount of 700.
    
    *
    * @param Money $amount
    *
    * @return self
    */
    public function setAmount(Money $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Transaction processing date
     *
     * @return \DateTime|null
     */
    public function getProcessDate(): ?\DateTime
    {
        return $this->processDate;
    }
    /**
     * Transaction processing date
     *
     * @param \DateTime|null $processDate
     *
     * @return self
     */
    public function setProcessDate(?\DateTime $processDate): self
    {
        $this->initialized['processDate'] = true;
        $this->processDate = $processDate;
        return $this;
    }
    /**
     * Originating account details for the transfer
     *
     * @return array<string, mixed>
     */
    public function getOriginatingAccount(): iterable
    {
        return $this->originatingAccount;
    }
    /**
     * Originating account details for the transfer
     *
     * @param array<string, mixed> $originatingAccount
     *
     * @return self
     */
    public function setOriginatingAccount(iterable $originatingAccount): self
    {
        $this->initialized['originatingAccount'] = true;
        $this->originatingAccount = $originatingAccount;
        return $this;
    }
    /**
     * `PROCESSING`: We have started to process the sending or receiving of this transaction.
     * `SCHEDULED`: The transaction is scheduled to enter the `PROCESSING` status.
     * `PENDING_APPROVAL`: The transaction requires approval before it can enter the `SCHEDULED` or `PROCESSING` status.
     * `FAILED`: A grouping of multiple terminal states that prevented the transaction from completing.
     * This includes a a user-cancellation, approval being denied, insufficient funds, failed verifications, etc.
     * `PROCESSED`: The money movement has been fully completed, which could mean money sent has arrived.
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * `PROCESSING`: We have started to process the sending or receiving of this transaction.
    `SCHEDULED`: The transaction is scheduled to enter the `PROCESSING` status.
    `PENDING_APPROVAL`: The transaction requires approval before it can enter the `SCHEDULED` or `PROCESSING` status.
    `FAILED`: A grouping of multiple terminal states that prevented the transaction from completing.
    This includes a a user-cancellation, approval being denied, insufficient funds, failed verifications, etc.
    `PROCESSED`: The money movement has been fully completed, which could mean money sent has arrived.
    
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
     * @return string
     */
    public function getCancellationReason(): string
    {
        return $this->cancellationReason;
    }
    /**
     * @param string $cancellationReason
     *
     * @return self
     */
    public function setCancellationReason(string $cancellationReason): self
    {
        $this->initialized['cancellationReason'] = true;
        $this->cancellationReason = $cancellationReason;
        return $this;
    }
    /**
     * Estimated delivery date for transfer
     *
     * @return \DateTime|null
     */
    public function getEstimatedDeliveryDate(): ?\DateTime
    {
        return $this->estimatedDeliveryDate;
    }
    /**
     * Estimated delivery date for transfer
     *
     * @param \DateTime|null $estimatedDeliveryDate
     *
     * @return self
     */
    public function setEstimatedDeliveryDate(?\DateTime $estimatedDeliveryDate): self
    {
        $this->initialized['estimatedDeliveryDate'] = true;
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
        return $this;
    }
    /**
     * User ID of the transfer initiator
     *
     * @return string|null
     */
    public function getCreatorUserId(): ?string
    {
        return $this->creatorUserId;
    }
    /**
     * User ID of the transfer initiator
     *
     * @param string|null $creatorUserId
     *
     * @return self
     */
    public function setCreatorUserId(?string $creatorUserId): self
    {
        $this->initialized['creatorUserId'] = true;
        $this->creatorUserId = $creatorUserId;
        return $this;
    }
    /**
     * Date of transfer creation
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date of transfer creation
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Human readable name for the transaction
     *
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }
    /**
     * Human readable name for the transaction
     *
     * @param string|null $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName): self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * External memo for the transfer. `Payment Instructions` for Wires and the `Entry Description` for ACH payments.
     * Must be at most 90 characters for `ACH` and `WIRE` transactions
     * and at most 40 characters for `CHEQUES`
     * 
     *
     * @return string|null
     */
    public function getExternalMemo(): ?string
    {
        return $this->externalMemo;
    }
    /**
    * External memo for the transfer. `Payment Instructions` for Wires and the `Entry Description` for ACH payments. 
    Must be at most 90 characters for `ACH` and `WIRE` transactions
    and at most 40 characters for `CHEQUES`
    
    *
    * @param string|null $externalMemo
    *
    * @return self
    */
    public function setExternalMemo(?string $externalMemo): self
    {
        $this->initialized['externalMemo'] = true;
        $this->externalMemo = $externalMemo;
        return $this;
    }
}