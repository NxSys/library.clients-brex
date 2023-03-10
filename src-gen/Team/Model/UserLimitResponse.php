<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class UserLimitResponse extends \ArrayObject
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
     * @var UserLimitResponseMonthlyLimit
     */
    protected $monthlyLimit;
    /**
     * @var UserLimitResponseMonthlyAvailable
     */
    protected $monthlyAvailable;

    public function getMonthlyLimit(): UserLimitResponseMonthlyLimit
    {
        return $this->monthlyLimit;
    }

    public function setMonthlyLimit(UserLimitResponseMonthlyLimit $monthlyLimit): self
    {
        $this->initialized['monthlyLimit'] = true;
        $this->monthlyLimit = $monthlyLimit;

        return $this;
    }

    public function getMonthlyAvailable(): UserLimitResponseMonthlyAvailable
    {
        return $this->monthlyAvailable;
    }

    public function setMonthlyAvailable(UserLimitResponseMonthlyAvailable $monthlyAvailable): self
    {
        $this->initialized['monthlyAvailable'] = true;
        $this->monthlyAvailable = $monthlyAvailable;

        return $this;
    }
}
