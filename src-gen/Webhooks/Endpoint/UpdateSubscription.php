<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Webhooks\Endpoint;

class UpdateSubscription extends \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Update a webhook.
    You can update the endpoint url, event types that the endpoint receives, or temporarily deactivate the webhook.
     */
    public function __construct(string $id, \NxSys\Library\Clients\Brex\API\Webhooks\Model\UpdateWebhookSubscriptionRequest $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v1/webhooks/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Webhooks\Model\UpdateWebhookSubscriptionRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @return \NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSubscription|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionInternalServerErrorException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\\Library\\Clients\\Brex\\API\\Webhooks\\Model\\WebhookSubscription', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionBadRequestException();
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionUnauthorizedException();
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionForbiddenException();
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionInternalServerErrorException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}
