<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class ACHDetailsRequest extends \ArrayObject
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
     * The routing number must follow proper format.
     *
     * @var string
     */
    protected $routingNumber;
    /**
     * @var string
     */
    protected $accountNumber;
    /**
     * @var string
     */
    protected $accountType;
    /**
     * @var string
     */
    protected $accountClass;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The routing number must follow proper format.
     */
    public function getRoutingNumber(): string
    {
        return $this->routingNumber;
    }

    /**
     * The routing number must follow proper format.
     */
    public function setRoutingNumber(string $routingNumber): self
    {
        $this->initialized['routingNumber'] = true;
        $this->routingNumber = $routingNumber;

        return $this;
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getAccountType(): string
    {
        return $this->accountType;
    }

    public function setAccountType(string $accountType): self
    {
        $this->initialized['accountType'] = true;
        $this->accountType = $accountType;

        return $this;
    }

    public function getAccountClass(): string
    {
        return $this->accountClass;
    }

    public function setAccountClass(string $accountClass): self
    {
        $this->initialized['accountClass'] = true;
        $this->accountClass = $accountClass;

        return $this;
    }
}