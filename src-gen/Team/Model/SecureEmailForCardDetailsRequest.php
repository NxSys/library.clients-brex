<?php

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class SecureEmailForCardDetailsRequest extends \ArrayObject
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
     * Email address to send card details to
     *
     * @var string
     */
    protected $recipientEmail;
    /**
     * Sender name. Shows up in the subject of the email
     *
     * @var string
     */
    protected $senderName;
    /**
     * Message to send with the card details
     *
     * @var string|null
     */
    protected $message;
    /**
     * Link expiry in number of days. Defaults to 30
     *
     * @var int|null
     */
    protected $expiryDays;
    /**
     * Email address to send card details to
     *
     * @return string
     */
    public function getRecipientEmail(): string
    {
        return $this->recipientEmail;
    }
    /**
     * Email address to send card details to
     *
     * @param string $recipientEmail
     *
     * @return self
     */
    public function setRecipientEmail(string $recipientEmail): self
    {
        $this->initialized['recipientEmail'] = true;
        $this->recipientEmail = $recipientEmail;
        return $this;
    }
    /**
     * Sender name. Shows up in the subject of the email
     *
     * @return string
     */
    public function getSenderName(): string
    {
        return $this->senderName;
    }
    /**
     * Sender name. Shows up in the subject of the email
     *
     * @param string $senderName
     *
     * @return self
     */
    public function setSenderName(string $senderName): self
    {
        $this->initialized['senderName'] = true;
        $this->senderName = $senderName;
        return $this;
    }
    /**
     * Message to send with the card details
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Message to send with the card details
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * Link expiry in number of days. Defaults to 30
     *
     * @return int|null
     */
    public function getExpiryDays(): ?int
    {
        return $this->expiryDays;
    }
    /**
     * Link expiry in number of days. Defaults to 30
     *
     * @param int|null $expiryDays
     *
     * @return self
     */
    public function setExpiryDays(?int $expiryDays): self
    {
        $this->initialized['expiryDays'] = true;
        $this->expiryDays = $expiryDays;
        return $this;
    }
}