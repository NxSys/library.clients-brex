<?php

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class UpdateCardRequest extends \ArrayObject
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
     * @var UpdateCardRequestSpendControls
     */
    protected $spendControls;
    /**
     * @return UpdateCardRequestSpendControls
     */
    public function getSpendControls(): UpdateCardRequestSpendControls
    {
        return $this->spendControls;
    }
    /**
     * @param UpdateCardRequestSpendControls $spendControls
     *
     * @return self
     */
    public function setSpendControls(UpdateCardRequestSpendControls $spendControls): self
    {
        $this->initialized['spendControls'] = true;
        $this->spendControls = $spendControls;
        return $this;
    }
}