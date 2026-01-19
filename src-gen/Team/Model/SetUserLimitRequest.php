<?php

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class SetUserLimitRequest extends \ArrayObject
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
     * @var SetUserLimitRequestMonthlyLimit
     */
    protected $monthlyLimit;
    /**
     * @return SetUserLimitRequestMonthlyLimit
     */
    public function getMonthlyLimit(): SetUserLimitRequestMonthlyLimit
    {
        return $this->monthlyLimit;
    }
    /**
     * @param SetUserLimitRequestMonthlyLimit $monthlyLimit
     *
     * @return self
     */
    public function setMonthlyLimit(SetUserLimitRequestMonthlyLimit $monthlyLimit): self
    {
        $this->initialized['monthlyLimit'] = true;
        $this->monthlyLimit = $monthlyLimit;
        return $this;
    }
}