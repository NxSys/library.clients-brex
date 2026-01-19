<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class Cash extends \ArrayObject
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
     * @var list<Account>|null
     */
    protected $accounts;
    /**
     * @var Application
     */
    protected $application;
    /**
     * @return list<Account>|null
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }
    /**
     * @param list<Account>|null $accounts
     *
     * @return self
     */
    public function setAccounts(?array $accounts): self
    {
        $this->initialized['accounts'] = true;
        $this->accounts = $accounts;
        return $this;
    }
    /**
     * @return Application
     */
    public function getApplication(): Application
    {
        return $this->application;
    }
    /**
     * @param Application $application
     *
     * @return self
     */
    public function setApplication(Application $application): self
    {
        $this->initialized['application'] = true;
        $this->application = $application;
        return $this;
    }
}