<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class Product extends \ArrayObject
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
     * Available if customer applied for Brex Cash.
     *
     * @var Cash
     */
    protected $cash;
    /**
     * Available if customer applied for Brex Cash.
     *
     * @return Cash
     */
    public function getCash(): Cash
    {
        return $this->cash;
    }
    /**
     * Available if customer applied for Brex Cash.
     *
     * @param Cash $cash
     *
     * @return self
     */
    public function setCash(Cash $cash): self
    {
        $this->initialized['cash'] = true;
        $this->cash = $cash;
        return $this;
    }
}