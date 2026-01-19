<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Model;

class ExpensePaymentStatusUpdatedEvent extends \ArrayObject
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
    protected $eventType;
    /**
     * @var string
     */
    protected $expenseId;
    /**
     * `PENDING`:The transaction is yet to be captured. It may be approved, yet to be approved, or yet to be declined.
     * 
     * `DECLINED`: The transaction was declined.
     * 
     *
     * @var string
     */
    protected $paymentStatus;
    /**
     * `PURCHASE`: A pending transaction for making a purchase.
     * 
     * `REFUND`: A pending transaction for a refund.
     * 
     * `WITHDRAWAL`: A pending transaction for a withdrawal.
     * 
     * `DECLINED`: A pending transaction that was declined and will not be completed.
     * 
     *
     * @var string
     */
    protected $paymentType;
    /**
     * 
     * This is the `id` returned in the [Get Company](/openapi/team_api/#operation/getCompany) endpoint.
     * You can use the `company_id` to determine which access token to use when you get the details from our API endpoints.
     * 
     *
     * @var string
     */
    protected $companyId;
    /**
     * @var ExpensePaymentStatusUpdatedEventAmount
     */
    protected $amount;
    /**
     * The name of the card acceptor.
     *
     * @var string
     */
    protected $paymentDescription;
    /**
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }
    /**
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * @return string
     */
    public function getExpenseId(): string
    {
        return $this->expenseId;
    }
    /**
     * @param string $expenseId
     *
     * @return self
     */
    public function setExpenseId(string $expenseId): self
    {
        $this->initialized['expenseId'] = true;
        $this->expenseId = $expenseId;
        return $this;
    }
    /**
     * `PENDING`:The transaction is yet to be captured. It may be approved, yet to be approved, or yet to be declined.
     * 
     * `DECLINED`: The transaction was declined.
     * 
     *
     * @return string
     */
    public function getPaymentStatus(): string
    {
        return $this->paymentStatus;
    }
    /**
    * `PENDING`:The transaction is yet to be captured. It may be approved, yet to be approved, or yet to be declined.
    
    `DECLINED`: The transaction was declined.
    
    *
    * @param string $paymentStatus
    *
    * @return self
    */
    public function setPaymentStatus(string $paymentStatus): self
    {
        $this->initialized['paymentStatus'] = true;
        $this->paymentStatus = $paymentStatus;
        return $this;
    }
    /**
     * `PURCHASE`: A pending transaction for making a purchase.
     * 
     * `REFUND`: A pending transaction for a refund.
     * 
     * `WITHDRAWAL`: A pending transaction for a withdrawal.
     * 
     * `DECLINED`: A pending transaction that was declined and will not be completed.
     * 
     *
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }
    /**
    * `PURCHASE`: A pending transaction for making a purchase.
    
    `REFUND`: A pending transaction for a refund.
    
    `WITHDRAWAL`: A pending transaction for a withdrawal.
    
    `DECLINED`: A pending transaction that was declined and will not be completed.
    
    *
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
     * This is the `id` returned in the [Get Company](/openapi/team_api/#operation/getCompany) endpoint.
     * You can use the `company_id` to determine which access token to use when you get the details from our API endpoints.
     * 
     *
     * @return string
     */
    public function getCompanyId(): string
    {
        return $this->companyId;
    }
    /**
    * 
    This is the `id` returned in the [Get Company](/openapi/team_api/#operation/getCompany) endpoint.
    You can use the `company_id` to determine which access token to use when you get the details from our API endpoints.
    
    *
    * @param string $companyId
    *
    * @return self
    */
    public function setCompanyId(string $companyId): self
    {
        $this->initialized['companyId'] = true;
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * @return ExpensePaymentStatusUpdatedEventAmount
     */
    public function getAmount(): ExpensePaymentStatusUpdatedEventAmount
    {
        return $this->amount;
    }
    /**
     * @param ExpensePaymentStatusUpdatedEventAmount $amount
     *
     * @return self
     */
    public function setAmount(ExpensePaymentStatusUpdatedEventAmount $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * The name of the card acceptor.
     *
     * @return string
     */
    public function getPaymentDescription(): string
    {
        return $this->paymentDescription;
    }
    /**
     * The name of the card acceptor.
     *
     * @param string $paymentDescription
     *
     * @return self
     */
    public function setPaymentDescription(string $paymentDescription): self
    {
        $this->initialized['paymentDescription'] = true;
        $this->paymentDescription = $paymentDescription;
        return $this;
    }
}