<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class BrexCashAccountDetails extends \ArrayObject
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
     * ID of the Brex Cash account: Can be found from the `/accounts` endpoint
     * where instrument type is `CASH`.
     *
     * @var string
     */
    protected $id;

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
     * ID of the Brex Cash account: Can be found from the `/accounts` endpoint
     * where instrument type is `CASH`.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * ID of the Brex Cash account: Can be found from the `/accounts` endpoint
     * where instrument type is `CASH`.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}
