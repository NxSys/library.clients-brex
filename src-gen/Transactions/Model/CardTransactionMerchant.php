<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Transactions\Model;

class CardTransactionMerchant extends \ArrayObject
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
     * Merchant descriptor.
     *
     * @var string
     */
    protected $rawDescriptor;
    /**
     * https://en.wikipedia.org/wiki/Merchant_category_code.
     *
     * @var string
     */
    protected $mcc;

    /**
     * Merchant descriptor.
     */
    public function getRawDescriptor(): string
    {
        return $this->rawDescriptor;
    }

    /**
     * Merchant descriptor.
     */
    public function setRawDescriptor(string $rawDescriptor): self
    {
        $this->initialized['rawDescriptor'] = true;
        $this->rawDescriptor = $rawDescriptor;

        return $this;
    }

    /**
     * https://en.wikipedia.org/wiki/Merchant_category_code.
     */
    public function getMcc(): string
    {
        return $this->mcc;
    }

    /**
     * https://en.wikipedia.org/wiki/Merchant_category_code.
     */
    public function setMcc(string $mcc): self
    {
        $this->initialized['mcc'] = true;
        $this->mcc = $mcc;

        return $this;
    }
}
