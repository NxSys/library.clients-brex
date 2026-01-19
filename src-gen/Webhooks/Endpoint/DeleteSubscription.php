<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Endpoint;

class DeleteSubscription extends \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Unregister a webhook if you want to stop receiving webhook events
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v1/webhooks/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\DeleteSubscriptionBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\DeleteSubscriptionUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\DeleteSubscriptionForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\DeleteSubscriptionInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\DeleteSubscriptionBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\DeleteSubscriptionUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\DeleteSubscriptionForbiddenException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\DeleteSubscriptionInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}