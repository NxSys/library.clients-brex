<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class Instruction extends \ArrayObject
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
     * Domestic ACH/wire instructions.
     *
     * @var DomesticInstruction
     */
    protected $domestic;
    /**
     * International wire instructions.
     *
     * @var InternationalInstruction
     */
    protected $international;
    /**
     * Domestic ACH/wire instructions.
     *
     * @return DomesticInstruction
     */
    public function getDomestic(): DomesticInstruction
    {
        return $this->domestic;
    }
    /**
     * Domestic ACH/wire instructions.
     *
     * @param DomesticInstruction $domestic
     *
     * @return self
     */
    public function setDomestic(DomesticInstruction $domestic): self
    {
        $this->initialized['domestic'] = true;
        $this->domestic = $domestic;
        return $this;
    }
    /**
     * International wire instructions.
     *
     * @return InternationalInstruction
     */
    public function getInternational(): InternationalInstruction
    {
        return $this->international;
    }
    /**
     * International wire instructions.
     *
     * @param InternationalInstruction $international
     *
     * @return self
     */
    public function setInternational(InternationalInstruction $international): self
    {
        $this->initialized['international'] = true;
        $this->international = $international;
        return $this;
    }
}