<?php

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class CreateCardRequestCardAttributePreferences extends \ArrayObject
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
    protected $threeDomainSecureEnabledPreference;
    /**
     * @return string
     */
    public function getThreeDomainSecureEnabledPreference(): string
    {
        return $this->threeDomainSecureEnabledPreference;
    }
    /**
     * @param string $threeDomainSecureEnabledPreference
     *
     * @return self
     */
    public function setThreeDomainSecureEnabledPreference(string $threeDomainSecureEnabledPreference): self
    {
        $this->initialized['threeDomainSecureEnabledPreference'] = true;
        $this->threeDomainSecureEnabledPreference = $threeDomainSecureEnabledPreference;
        return $this;
    }
}