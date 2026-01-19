<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class ChequeDetailsRequest extends \ArrayObject
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
    protected $type;
    /**
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     *
     * @var Address
     */
    protected $mailingAddress;
    /**
     * @var string
     */
    protected $recipientName;
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
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     *
     * @return Address
     */
    public function getMailingAddress(): Address
    {
        return $this->mailingAddress;
    }
    /**
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     *
     * @param Address $mailingAddress
     *
     * @return self
     */
    public function setMailingAddress(Address $mailingAddress): self
    {
        $this->initialized['mailingAddress'] = true;
        $this->mailingAddress = $mailingAddress;
        return $this;
    }
    /**
     * @return string
     */
    public function getRecipientName(): string
    {
        return $this->recipientName;
    }
    /**
     * @param string $recipientName
     *
     * @return self
     */
    public function setRecipientName(string $recipientName): self
    {
        $this->initialized['recipientName'] = true;
        $this->recipientName = $recipientName;
        return $this;
    }
}