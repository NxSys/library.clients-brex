<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Endpoint;

class GetSubscriptionById extends \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Get details of a webhook
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v1/webhooks/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\GetSubscriptionByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\GetSubscriptionByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\GetSubscriptionByIdForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\GetSubscriptionByIdInternalServerErrorException
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
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\GetSubscriptionByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\GetSubscriptionByIdUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\GetSubscriptionByIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\GetSubscriptionByIdInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}