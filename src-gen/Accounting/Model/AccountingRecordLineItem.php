<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class AccountingRecordLineItem extends \ArrayObject
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
     * Unique identifier for the line item
     *
     * @var string
     */
    protected $id;
    /**
     * Type of line item
     *
     * @var string
     */
    protected $type;
    /**
     * Amount for this line item. Amount is always positive for `AccountingRecordLineItem`.
     *
     * @var AccountingRecordLineItemAmount
     */
    protected $amount;
    /**
     * Original amount for this line item. Amount is always positive for `AccountingRecordLineItem`.
     *
     * @var AccountingRecordLineItemOriginalAmount|null
     */
    protected $originalAmount;
    /**
     * Memo/description
     *
     * @var string|null
     */
    protected $memo;
    /**
     * Accounting field mappings
     *
     * @var list<AccountingFieldValue>
     */
    protected $accountingFieldValues;
    /**
     * Unique identifier for the line item
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique identifier for the line item
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
     * Type of line item
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of line item
     *
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
     * Amount for this line item. Amount is always positive for `AccountingRecordLineItem`.
     *
     * @return AccountingRecordLineItemAmount
     */
    public function getAmount(): AccountingRecordLineItemAmount
    {
        return $this->amount;
    }
    /**
     * Amount for this line item. Amount is always positive for `AccountingRecordLineItem`.
     *
     * @param AccountingRecordLineItemAmount $amount
     *
     * @return self
     */
    public function setAmount(AccountingRecordLineItemAmount $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Original amount for this line item. Amount is always positive for `AccountingRecordLineItem`.
     *
     * @return AccountingRecordLineItemOriginalAmount|null
     */
    public function getOriginalAmount(): ?AccountingRecordLineItemOriginalAmount
    {
        return $this->originalAmount;
    }
    /**
     * Original amount for this line item. Amount is always positive for `AccountingRecordLineItem`.
     *
     * @param AccountingRecordLineItemOriginalAmount|null $originalAmount
     *
     * @return self
     */
    public function setOriginalAmount(?AccountingRecordLineItemOriginalAmount $originalAmount): self
    {
        $this->initialized['originalAmount'] = true;
        $this->originalAmount = $originalAmount;
        return $this;
    }
    /**
     * Memo/description
     *
     * @return string|null
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }
    /**
     * Memo/description
     *
     * @param string|null $memo
     *
     * @return self
     */
    public function setMemo(?string $memo): self
    {
        $this->initialized['memo'] = true;
        $this->memo = $memo;
        return $this;
    }
    /**
     * Accounting field mappings
     *
     * @return list<AccountingFieldValue>
     */
    public function getAccountingFieldValues(): array
    {
        return $this->accountingFieldValues;
    }
    /**
     * Accounting field mappings
     *
     * @param list<AccountingFieldValue> $accountingFieldValues
     *
     * @return self
     */
    public function setAccountingFieldValues(array $accountingFieldValues): self
    {
        $this->initialized['accountingFieldValues'] = true;
        $this->accountingFieldValues = $accountingFieldValues;
        return $this;
    }
}