<?php

namespace NxSys\Library\Clients\Brex\API\Team\Endpoint;

class GetMe extends \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v2/users/me';
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
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetMeBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetMeUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetMeForbiddenException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Team\Model\UserResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Team\Model\UserResponse', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\GetMeBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\GetMeUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\GetMeForbiddenException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}