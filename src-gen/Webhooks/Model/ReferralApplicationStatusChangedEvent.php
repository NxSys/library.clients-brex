<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Webhooks\Model;

class ReferralApplicationStatusChangedEvent extends \ArrayObject
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
    protected $eventType;
    /**
     * @var string
     */
    protected $referralId;
    /**
     * @var ProductApplication
     */
    protected $application;

    public function getEventType(): string
    {
        return $this->eventType;
    }

    public function setEventType(string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;

        return $this;
    }

    public function getReferralId(): string
    {
        return $this->referralId;
    }

    public function setReferralId(string $referralId): self
    {
        $this->initialized['referralId'] = true;
        $this->referralId = $referralId;

        return $this;
    }

    public function getApplication(): ProductApplication
    {
        return $this->application;
    }

    public function setApplication(ProductApplication $application): self
    {
        $this->initialized['application'] = true;
        $this->application = $application;

        return $this;
    }
}
