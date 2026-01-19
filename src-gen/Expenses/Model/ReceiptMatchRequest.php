<?php

namespace NxSys\Library\Clients\Brex\API\Expenses\Model;

class ReceiptMatchRequest extends \ArrayObject
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
     * The name of the receipt (with the file extension). It will be used in the matching result email.
     *
     * @var string
     */
    protected $receiptName;
    /**
     * The name of the receipt (with the file extension). It will be used in the matching result email.
     *
     * @return string
     */
    public function getReceiptName(): string
    {
        return $this->receiptName;
    }
    /**
     * The name of the receipt (with the file extension). It will be used in the matching result email.
     *
     * @param string $receiptName
     *
     * @return self
     */
    public function setReceiptName(string $receiptName): self
    {
        $this->initialized['receiptName'] = true;
        $this->receiptName = $receiptName;
        return $this;
    }
}