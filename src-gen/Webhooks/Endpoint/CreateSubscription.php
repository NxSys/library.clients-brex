<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Endpoint;

class CreateSubscription extends \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\Endpoint
{
    /**
     * Register an endpoint to start receiving selected webhook events
     * @param \NxSys\Library\Clients\Brex\API\Webhooks\Model\CreateWebhookSubscriptionRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     */
    public function __construct(\NxSys\Library\Clients\Brex\API\Webhooks\Model\CreateWebhookSubscriptionRequest $requestBody, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v1/webhooks';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Webhooks\Model\CreateWebhookSubscriptionRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Idempotency-Key']);
        $optionsResolver->setRequired(['Idempotency-Key']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Idempotency-Key', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\CreateSubscriptionBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\CreateSubscriptionUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\CreateSubscriptionForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\CreateSubscriptionInternalServerErrorException
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
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\CreateSubscriptionBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\CreateSubscriptionUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\CreateSubscriptionForbiddenException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\CreateSubscriptionInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}