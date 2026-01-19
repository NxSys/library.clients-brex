<?php

namespace NxSys\Library\Clients\Brex\API\Team\Endpoint;

class GetLocationById extends \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\Endpoint
{
    protected $id;
    /**
     *
     * This endpoint gets a location by ID.
     *
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v2/locations/{id}');
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
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetLocationByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetLocationByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetLocationByIdForbiddenException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Team\Model\LocationResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Team\Model\LocationResponse', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\GetLocationByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\GetLocationByIdUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\GetLocationByIdForbiddenException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}