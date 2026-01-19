<?php

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
    /**
     * @return UserLimitResponseMonthlyLimit
     */
    public function getMonthlyLimit(): UserLimitResponseMonthlyLimit
    {
        return $this->monthlyLimit;
    }
    /**
     * @param UserLimitResponseMonthlyLimit $monthlyLimit
     *
     * @return self
     */
    public function setMonthlyLimit(UserLimitResponseMonthlyLimit $monthlyLimit): self
    {
        $this->initialized['monthlyLimit'] = true;
        $this->monthlyLimit = $monthlyLimit;
        return $this;
    }
    /**
     * @return UserLimitResponseMonthlyAvailable
     */
    public function getMonthlyAvailable(): UserLimitResponseMonthlyAvailable
    {
        return $this->monthlyAvailable;
    }
    /**
     * @param UserLimitResponseMonthlyAvailable $monthlyAvailable
     *
     * @return self
     */
    public function setMonthlyAvailable(UserLimitResponseMonthlyAvailable $monthlyAvailable): self
    {
        $this->initialized['monthlyAvailable'] = true;
        $this->monthlyAvailable = $monthlyAvailable;
        return $this;
    }
}