<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class BookTransferDetailsResponse extends \ArrayObject
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
     * This feature is currently limited to certain customers, please reach out if you are interested
     *
     * @var string
     */
    protected $depositAccountId;
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
     * This feature is currently limited to certain customers, please reach out if you are interested
     *
     * @return string
     */
    public function getDepositAccountId(): string
    {
        return $this->depositAccountId;
    }
    /**
     * This feature is currently limited to certain customers, please reach out if you are interested
     *
     * @param string $depositAccountId
     *
     * @return self
     */
    public function setDepositAccountId(string $depositAccountId): self
    {
        $this->initialized['depositAccountId'] = true;
        $this->depositAccountId = $depositAccountId;
        return $this;
    }
}