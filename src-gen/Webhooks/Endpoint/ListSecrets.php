<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Endpoint;

class ListSecrets extends \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v1/webhooks/secrets';
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
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSecretsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSecretsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSecretsForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSecretsInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSecret[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSecret[]', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSecretsBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSecretsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSecretsForbiddenException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSecretsInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}