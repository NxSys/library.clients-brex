<?php

namespace NxSys\Library\Clients\Brex\API\Transactions\Model;

class CashTransaction extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * Description of the transaction
     *
     * @var string
     */
    protected $description;
    /**
     * @var CashTransactionAmount
     */
    protected $amount;
    /**
     * ISO 8601 date of when the payment is initiated
     *
     * @var \DateTime
     */
    protected $initiatedAtDate;
    /**
     * ISO 8601 date of when the payment is posted
     *
     * @var \DateTime
     */
    protected $postedAtDate;
    /**
     * @var string
     */
    protected $type;
    /**
     * Transfer ID to fetch additional metadata about the transaction using `https://developer.brex.com/openapi/payments_api/#operation/getTransfersById`
     *
     * @var string|null
     */
    protected $transferId;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
     * Description of the transaction
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the transaction
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return CashTransactionAmount
     */
    public function getAmount(): CashTransactionAmount
    {
        return $this->amount;
    }
    /**
     * @param CashTransactionAmount $amount
     *
     * @return self
     */
    public function setAmount(CashTransactionAmount $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * ISO 8601 date of when the payment is initiated
     *
     * @return \DateTime
     */
    public function getInitiatedAtDate(): \DateTime
    {
        return $this->initiatedAtDate;
    }
    /**
     * ISO 8601 date of when the payment is initiated
     *
     * @param \DateTime $initiatedAtDate
     *
     * @return self
     */
    public function setInitiatedAtDate(\DateTime $initiatedAtDate): self
    {
        $this->initialized['initiatedAtDate'] = true;
        $this->initiatedAtDate = $initiatedAtDate;
        return $this;
    }
    /**
     * ISO 8601 date of when the payment is posted
     *
     * @return \DateTime
     */
    public function getPostedAtDate(): \DateTime
    {
        return $this->postedAtDate;
    }
    /**
     * ISO 8601 date of when the payment is posted
     *
     * @param \DateTime $postedAtDate
     *
     * @return self
     */
    public function setPostedAtDate(\DateTime $postedAtDate): self
    {
        $this->initialized['postedAtDate'] = true;
        $this->postedAtDate = $postedAtDate;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Transfer ID to fetch additional metadata about the transaction using `https://developer.brex.com/openapi/payments_api/#operation/getTransfersById`
     *
     * @return string|null
     */
    public function getTransferId(): ?string
    {
        return $this->transferId;
    }
    /**
     * Transfer ID to fetch additional metadata about the transaction using `https://developer.brex.com/openapi/payments_api/#operation/getTransfersById`
     *
     * @param string|null $transferId
     *
     * @return self
     */
    public function setTransferId(?string $transferId): self
    {
        $this->initialized['transferId'] = true;
        $this->transferId = $transferId;
        return $this;
    }
}