<?php

namespace NxSys\Library\Clients\Brex\API\Transactions\Model;

class CardTransaction extends \ArrayObject
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
     * ID of the card used for the transaction. Null when type is REWARDS_CREDIT or COLLECTION.
     *
     * @var string|null
     */
    protected $cardId;
    /**
     * Description of the transaction
     *
     * @var string
     */
    protected $description;
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
     * ISO 8601 date string
     *
     * @var \DateTime
     */
    protected $initiatedAtDate;
    /**
     * ISO 8601 date string
     *
     * @var \DateTime
     */
    protected $postedAtDate;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var CardTransactionMerchant
     */
    protected $merchant;
    /**
     * 
     * Set of key value pairs associated with this object. Please do not store any personally identifiable or sensitive information here.
     * Limitations: maximum of 50 keys, keys cannot exceed 40 characters, values cannot exceed 500 characters.
     * 
     *
     * @var array<string, string>|null
     */
    protected $cardMetadata;
    /**
     * The expense ID related to the card transaction.
     *
     * @var string|null
     */
    protected $expenseId;
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
     * ID of the card used for the transaction. Null when type is REWARDS_CREDIT or COLLECTION.
     *
     * @return string|null
     */
    public function getCardId(): ?string
    {
        return $this->cardId;
    }
    /**
     * ID of the card used for the transaction. Null when type is REWARDS_CREDIT or COLLECTION.
     *
     * @param string|null $cardId
     *
     * @return self
     */
    public function setCardId(?string $cardId): self
    {
        $this->initialized['cardId'] = true;
        $this->cardId = $cardId;
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
     * ISO 8601 date string
     *
     * @return \DateTime
     */
    public function getInitiatedAtDate(): \DateTime
    {
        return $this->initiatedAtDate;
    }
    /**
     * ISO 8601 date string
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
     * ISO 8601 date string
     *
     * @return \DateTime
     */
    public function getPostedAtDate(): \DateTime
    {
        return $this->postedAtDate;
    }
    /**
     * ISO 8601 date string
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
     * @return CardTransactionMerchant
     */
    public function getMerchant(): CardTransactionMerchant
    {
        return $this->merchant;
    }
    /**
     * @param CardTransactionMerchant $merchant
     *
     * @return self
     */
    public function setMerchant(CardTransactionMerchant $merchant): self
    {
        $this->initialized['merchant'] = true;
        $this->merchant = $merchant;
        return $this;
    }
    /**
     * 
     * Set of key value pairs associated with this object. Please do not store any personally identifiable or sensitive information here.
     * Limitations: maximum of 50 keys, keys cannot exceed 40 characters, values cannot exceed 500 characters.
     * 
     *
     * @return array<string, string>|null
     */
    public function getCardMetadata(): ?iterable
    {
        return $this->cardMetadata;
    }
    /**
    * 
    Set of key value pairs associated with this object. Please do not store any personally identifiable or sensitive information here.
    Limitations: maximum of 50 keys, keys cannot exceed 40 characters, values cannot exceed 500 characters. 
    
    *
    * @param array<string, string>|null $cardMetadata
    *
    * @return self
    */
    public function setCardMetadata(?iterable $cardMetadata): self
    {
        $this->initialized['cardMetadata'] = true;
        $this->cardMetadata = $cardMetadata;
        return $this;
    }
    /**
     * The expense ID related to the card transaction.
     *
     * @return string|null
     */
    public function getExpenseId(): ?string
    {
        return $this->expenseId;
    }
    /**
     * The expense ID related to the card transaction.
     *
     * @param string|null $expenseId
     *
     * @return self
     */
    public function setExpenseId(?string $expenseId): self
    {
        $this->initialized['expenseId'] = true;
        $this->expenseId = $expenseId;
        return $this;
    }
}