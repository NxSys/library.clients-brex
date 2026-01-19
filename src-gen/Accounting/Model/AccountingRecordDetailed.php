<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class AccountingRecordDetailed extends \ArrayObject
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
     * Unique identifier for the accounting record
     *
     * @var string
     */
    protected $id;
    /**
     * Amount of the accounting record
     *
     * @var AccountingRecordDetailedAmount
     */
    protected $amount;
    /**
     * Original amount if different from current
     *
     * @var AccountingRecordDetailedOriginalAmount|null
     */
    protected $originalAmount;
    /**
     * Types of accounting records representing different financial transactions:
     * 
     * **Card-related transactions:**
     * 
     * - `CARD_EXPENSE_POST`: Records when a card expense is posted and settled
     * 
     * - `CARD_EXPENSE_REFUND`: Records when a merchant issues a refund for a card transaction
     * 
     * - `CARD_EXPENSE_REPAYMENT`: Records when an employee repays money to the company for a card expense
     * 
     * - `CARD_PAYMENT`: Records payments from customer to Brex for card balances
     * 
     * - `CARD_PAYMENT_REFUND`: Records refunds from Brex to customer for overpayments
     * 
     * - `REWARD_REDEMPTION`: Records when a reward is redeemed
     * 
     * **Bill-related transactions:**
     * 
     * - `BILL_EXPENSE`: Records when a bill expense is created
     * 
     * - `BILL_EXPENSE_PAYMENT`: Records when a bill is paid through ACH/wire transfer
     * 
     * - `BILL_EXPENSE_CARD_PAYMENT`: Records when a bill is paid using a Brex card
     * 
     * **Reimbursement-related transactions:**
     * 
     * - `REIMBURSEMENT_EXPENSE_APPROVAL`: Records approval of reimbursement (accrual basis)
     * 
     * - `REIMBURSEMENT_EXPENSE_POST`: Records when reimbursement is fulfilled (cash basis)
     * 
     * - `REIMBURSEMENT_EXPENSE_REPAYMENT`: Records repayment of a reimbursement expense
     * 
     * - `REIMBURSEMENT_EXPENSE_MONEY_MOVEMENT_PAYOUT`: Records payout to employee/third party
     * 
     * - `REIMBURSEMENT_EXPENSE_MONEY_MOVEMENT_PAYOUT_REVERSAL`: Records reversal of payout
     * 
     * - `REIMBURSEMENT_EXPENSE_MONEY_MOVEMENT_PAYIN`: Records payment from customer to Brex
     * 
     * - `REIMBURSEMENT_EXPENSE_MONEY_MOVEMENT_REFUND`: Records refund to customer's bank
     *
     * @var string
     */
    protected $type;
    /**
     * Review status
     *
     * @var string
     */
    protected $reviewStatus;
    /**
     * Source transaction ID
     *
     * @var string|null
     */
    protected $sourceId;
    /**
     * Source type
     *
     * @var string
     */
    protected $sourceType;
    /**
     * ERP impact date in UTC timezone
     *
     * @var \DateTime
     */
    protected $erpPostingDate;
    /**
     * Last update timestamp in UTC timezone
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Version number
     *
     * @var float
     */
    protected $version;
    /**
     * Associated receipts
     *
     * @var list<Receipt>|null
     */
    protected $receipts;
    /**
     * User associated with the record
     *
     * @var AccountingRecordDetailedUser|null
     */
    protected $user;
    /**
     * Vendor information
     *
     * @var AccountingRecordDetailedVendor|null
     */
    protected $vendor;
    /**
     * Memo/description
     *
     * @var string|null
     */
    protected $memo;
    /**
     * Source posted date in UTC timezone
     *
     * @var \DateTime
     */
    protected $postedAt;
    /**
     * Source due at in UTC timezone. For bills only
     *
     * @var \DateTime|null
     */
    protected $dueAt;
    /**
     * Invoice number. For bills only
     *
     * @var string|null
     */
    protected $invoiceNumber;
    /**
     * Line items for double-entry bookkeeping
     *
     * @var list<AccountingRecordLineItem>
     */
    protected $lineItems;
    /**
     * Unique identifier for the accounting record
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique identifier for the accounting record
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
     * Amount of the accounting record
     *
     * @return AccountingRecordDetailedAmount
     */
    public function getAmount(): AccountingRecordDetailedAmount
    {
        return $this->amount;
    }
    /**
     * Amount of the accounting record
     *
     * @param AccountingRecordDetailedAmount $amount
     *
     * @return self
     */
    public function setAmount(AccountingRecordDetailedAmount $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Original amount if different from current
     *
     * @return AccountingRecordDetailedOriginalAmount|null
     */
    public function getOriginalAmount(): ?AccountingRecordDetailedOriginalAmount
    {
        return $this->originalAmount;
    }
    /**
     * Original amount if different from current
     *
     * @param AccountingRecordDetailedOriginalAmount|null $originalAmount
     *
     * @return self
     */
    public function setOriginalAmount(?AccountingRecordDetailedOriginalAmount $originalAmount): self
    {
        $this->initialized['originalAmount'] = true;
        $this->originalAmount = $originalAmount;
        return $this;
    }
    /**
     * Types of accounting records representing different financial transactions:
     * 
     * **Card-related transactions:**
     * 
     * - `CARD_EXPENSE_POST`: Records when a card expense is posted and settled
     * 
     * - `CARD_EXPENSE_REFUND`: Records when a merchant issues a refund for a card transaction
     * 
     * - `CARD_EXPENSE_REPAYMENT`: Records when an employee repays money to the company for a card expense
     * 
     * - `CARD_PAYMENT`: Records payments from customer to Brex for card balances
     * 
     * - `CARD_PAYMENT_REFUND`: Records refunds from Brex to customer for overpayments
     * 
     * - `REWARD_REDEMPTION`: Records when a reward is redeemed
     * 
     * **Bill-related transactions:**
     * 
     * - `BILL_EXPENSE`: Records when a bill expense is created
     * 
     * - `BILL_EXPENSE_PAYMENT`: Records when a bill is paid through ACH/wire transfer
     * 
     * - `BILL_EXPENSE_CARD_PAYMENT`: Records when a bill is paid using a Brex card
     * 
     * **Reimbursement-related transactions:**
     * 
     * - `REIMBURSEMENT_EXPENSE_APPROVAL`: Records approval of reimbursement (accrual basis)
     * 
     * - `REIMBURSEMENT_EXPENSE_POST`: Records when reimbursement is fulfilled (cash basis)
     * 
     * - `REIMBURSEMENT_EXPENSE_REPAYMENT`: Records repayment of a reimbursement expense
     * 
     * - `REIMBURSEMENT_EXPENSE_MONEY_MOVEMENT_PAYOUT`: Records payout to employee/third party
     * 
     * - `REIMBURSEMENT_EXPENSE_MONEY_MOVEMENT_PAYOUT_REVERSAL`: Records reversal of payout
     * 
     * - `REIMBURSEMENT_EXPENSE_MONEY_MOVEMENT_PAYIN`: Records payment from customer to Brex
     * 
     * - `REIMBURSEMENT_EXPENSE_MONEY_MOVEMENT_REFUND`: Records refund to customer's bank
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * Types of accounting records representing different financial transactions:
    
    **Card-related transactions:**
    
    - `CARD_EXPENSE_POST`: Records when a card expense is posted and settled
    
    - `CARD_EXPENSE_REFUND`: Records when a merchant issues a refund for a card transaction
    
    - `CARD_EXPENSE_REPAYMENT`: Records when an employee repays money to the company for a card expense
    
    - `CARD_PAYMENT`: Records payments from customer to Brex for card balances
    
    - `CARD_PAYMENT_REFUND`: Records refunds from Brex to customer for overpayments
    
    - `REWARD_REDEMPTION`: Records when a reward is redeemed
    
    **Bill-related transactions:**
    
    - `BILL_EXPENSE`: Records when a bill expense is created
    
    - `BILL_EXPENSE_PAYMENT`: Records when a bill is paid through ACH/wire transfer
    
    - `BILL_EXPENSE_CARD_PAYMENT`: Records when a bill is paid using a Brex card
    
    **Reimbursement-related transactions:**
    
    - `REIMBURSEMENT_EXPENSE_APPROVAL`: Records approval of reimbursement (accrual basis)
    
    - `REIMBURSEMENT_EXPENSE_POST`: Records when reimbursement is fulfilled (cash basis)
    
    - `REIMBURSEMENT_EXPENSE_REPAYMENT`: Records repayment of a reimbursement expense
    
    - `REIMBURSEMENT_EXPENSE_MONEY_MOVEMENT_PAYOUT`: Records payout to employee/third party
    
    - `REIMBURSEMENT_EXPENSE_MONEY_MOVEMENT_PAYOUT_REVERSAL`: Records reversal of payout
    
    - `REIMBURSEMENT_EXPENSE_MONEY_MOVEMENT_PAYIN`: Records payment from customer to Brex
    
    - `REIMBURSEMENT_EXPENSE_MONEY_MOVEMENT_REFUND`: Records refund to customer's bank
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
     * Review status
     *
     * @return string
     */
    public function getReviewStatus(): string
    {
        return $this->reviewStatus;
    }
    /**
     * Review status
     *
     * @param string $reviewStatus
     *
     * @return self
     */
    public function setReviewStatus(string $reviewStatus): self
    {
        $this->initialized['reviewStatus'] = true;
        $this->reviewStatus = $reviewStatus;
        return $this;
    }
    /**
     * Source transaction ID
     *
     * @return string|null
     */
    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }
    /**
     * Source transaction ID
     *
     * @param string|null $sourceId
     *
     * @return self
     */
    public function setSourceId(?string $sourceId): self
    {
        $this->initialized['sourceId'] = true;
        $this->sourceId = $sourceId;
        return $this;
    }
    /**
     * Source type
     *
     * @return string
     */
    public function getSourceType(): string
    {
        return $this->sourceType;
    }
    /**
     * Source type
     *
     * @param string $sourceType
     *
     * @return self
     */
    public function setSourceType(string $sourceType): self
    {
        $this->initialized['sourceType'] = true;
        $this->sourceType = $sourceType;
        return $this;
    }
    /**
     * ERP impact date in UTC timezone
     *
     * @return \DateTime
     */
    public function getErpPostingDate(): \DateTime
    {
        return $this->erpPostingDate;
    }
    /**
     * ERP impact date in UTC timezone
     *
     * @param \DateTime $erpPostingDate
     *
     * @return self
     */
    public function setErpPostingDate(\DateTime $erpPostingDate): self
    {
        $this->initialized['erpPostingDate'] = true;
        $this->erpPostingDate = $erpPostingDate;
        return $this;
    }
    /**
     * Last update timestamp in UTC timezone
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Last update timestamp in UTC timezone
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Version number
     *
     * @return float
     */
    public function getVersion(): float
    {
        return $this->version;
    }
    /**
     * Version number
     *
     * @param float $version
     *
     * @return self
     */
    public function setVersion(float $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * Associated receipts
     *
     * @return list<Receipt>|null
     */
    public function getReceipts(): ?array
    {
        return $this->receipts;
    }
    /**
     * Associated receipts
     *
     * @param list<Receipt>|null $receipts
     *
     * @return self
     */
    public function setReceipts(?array $receipts): self
    {
        $this->initialized['receipts'] = true;
        $this->receipts = $receipts;
        return $this;
    }
    /**
     * User associated with the record
     *
     * @return AccountingRecordDetailedUser|null
     */
    public function getUser(): ?AccountingRecordDetailedUser
    {
        return $this->user;
    }
    /**
     * User associated with the record
     *
     * @param AccountingRecordDetailedUser|null $user
     *
     * @return self
     */
    public function setUser(?AccountingRecordDetailedUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * Vendor information
     *
     * @return AccountingRecordDetailedVendor|null
     */
    public function getVendor(): ?AccountingRecordDetailedVendor
    {
        return $this->vendor;
    }
    /**
     * Vendor information
     *
     * @param AccountingRecordDetailedVendor|null $vendor
     *
     * @return self
     */
    public function setVendor(?AccountingRecordDetailedVendor $vendor): self
    {
        $this->initialized['vendor'] = true;
        $this->vendor = $vendor;
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
     * Source posted date in UTC timezone
     *
     * @return \DateTime
     */
    public function getPostedAt(): \DateTime
    {
        return $this->postedAt;
    }
    /**
     * Source posted date in UTC timezone
     *
     * @param \DateTime $postedAt
     *
     * @return self
     */
    public function setPostedAt(\DateTime $postedAt): self
    {
        $this->initialized['postedAt'] = true;
        $this->postedAt = $postedAt;
        return $this;
    }
    /**
     * Source due at in UTC timezone. For bills only
     *
     * @return \DateTime|null
     */
    public function getDueAt(): ?\DateTime
    {
        return $this->dueAt;
    }
    /**
     * Source due at in UTC timezone. For bills only
     *
     * @param \DateTime|null $dueAt
     *
     * @return self
     */
    public function setDueAt(?\DateTime $dueAt): self
    {
        $this->initialized['dueAt'] = true;
        $this->dueAt = $dueAt;
        return $this;
    }
    /**
     * Invoice number. For bills only
     *
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }
    /**
     * Invoice number. For bills only
     *
     * @param string|null $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(?string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * Line items for double-entry bookkeeping
     *
     * @return list<AccountingRecordLineItem>
     */
    public function getLineItems(): array
    {
        return $this->lineItems;
    }
    /**
     * Line items for double-entry bookkeeping
     *
     * @param list<AccountingRecordLineItem> $lineItems
     *
     * @return self
     */
    public function setLineItems(array $lineItems): self
    {
        $this->initialized['lineItems'] = true;
        $this->lineItems = $lineItems;
        return $this;
    }
}