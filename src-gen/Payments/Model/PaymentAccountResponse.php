<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Payments\Model;

class PaymentAccountResponse extends \ArrayObject
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
     * @var mixed[]
     */
    protected $details;

    /**
     * @return mixed[]
     */
    public function getDetails(): iterable
    {
        return $this->details;
    }

    /**
     * @param mixed[] $details
     */
    public function setDetails(iterable $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;

        return $this;
    }
}
