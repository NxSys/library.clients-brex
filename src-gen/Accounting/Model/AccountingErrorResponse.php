<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class AccountingErrorResponse extends \ArrayObject
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
     * Machine-readable error code
     *
     * @var string
     */
    protected $errorCode;
    /**
     * Human-readable error message
     *
     * @var string
     */
    protected $message;
    /**
     * Additional error context
     *
     * @var AccountingErrorResponseDetails|null
     */
    protected $details;
    /**
     * Machine-readable error code
     *
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }
    /**
     * Machine-readable error code
     *
     * @param string $errorCode
     *
     * @return self
     */
    public function setErrorCode(string $errorCode): self
    {
        $this->initialized['errorCode'] = true;
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Human-readable error message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Human-readable error message
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * Additional error context
     *
     * @return AccountingErrorResponseDetails|null
     */
    public function getDetails(): ?AccountingErrorResponseDetails
    {
        return $this->details;
    }
    /**
     * Additional error context
     *
     * @param AccountingErrorResponseDetails|null $details
     *
     * @return self
     */
    public function setDetails(?AccountingErrorResponseDetails $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
}