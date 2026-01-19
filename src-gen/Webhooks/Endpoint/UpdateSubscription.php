<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Endpoint;

class UpdateSubscription extends \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Update a webhook.
     * You can update the endpoint url, event types that the endpoint receives, or temporarily deactivate the webhook.
     *
     * @param string $id
     * @param \NxSys\Library\Clients\Brex\API\Webhooks\Model\UpdateWebhookSubscriptionRequest $requestBody
     */
    public function __construct(string $id, \NxSys\Library\Clients\Brex\API\Webhooks\Model\UpdateWebhookSubscriptionRequest $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\EndpointTrait;
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
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSubscription
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSubscription', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionForbiddenException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}