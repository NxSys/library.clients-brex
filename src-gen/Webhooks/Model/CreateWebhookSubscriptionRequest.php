<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Model;

class CreateWebhookSubscriptionRequest extends \ArrayObject
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
    protected $url;
    /**
     * The Brex API sends webhooks for the events listed below.
     * For more details, see the [webhook guide](/docs/webhooks/#webhook-event-catalog) and
     * [webhook events API reference](/openapi/webhooks_api/#tag/Webhook-Events).
     *
     * @var list<string>
     */
    protected $eventTypes;
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * The Brex API sends webhooks for the events listed below.
     * For more details, see the [webhook guide](/docs/webhooks/#webhook-event-catalog) and
     * [webhook events API reference](/openapi/webhooks_api/#tag/Webhook-Events).
     *
     * @return list<string>
     */
    public function getEventTypes(): array
    {
        return $this->eventTypes;
    }
    /**
    * The Brex API sends webhooks for the events listed below.
    For more details, see the [webhook guide](/docs/webhooks/#webhook-event-catalog) and
    [webhook events API reference](/openapi/webhooks_api/#tag/Webhook-Events).
    *
    * @param list<string> $eventTypes
    *
    * @return self
    */
    public function setEventTypes(array $eventTypes): self
    {
        $this->initialized['eventTypes'] = true;
        $this->eventTypes = $eventTypes;
        return $this;
    }
}