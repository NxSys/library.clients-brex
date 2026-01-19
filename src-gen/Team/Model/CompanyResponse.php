<?php

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class CompanyResponse extends \ArrayObject
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
     * @var string
     */
    protected $legalName;
    /**
     * Company business address (must be in the US; no PO box or virtual/forwarding addresses allowed).
     *
     * @var Address
     */
    protected $mailingAddress;
    /**
     * @var string
     */
    protected $accountType;
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
     * @return string
     */
    public function getLegalName(): string
    {
        return $this->legalName;
    }
    /**
     * @param string $legalName
     *
     * @return self
     */
    public function setLegalName(string $legalName): self
    {
        $this->initialized['legalName'] = true;
        $this->legalName = $legalName;
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
    public function getAccountType(): string
    {
        return $this->accountType;
    }
    /**
     * @param string $accountType
     *
     * @return self
     */
    public function setAccountType(string $accountType): self
    {
        $this->initialized['accountType'] = true;
        $this->accountType = $accountType;
        return $this;
    }
}