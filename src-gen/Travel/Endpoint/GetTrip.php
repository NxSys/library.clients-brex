<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Endpoint;

class GetTrip extends \NxSys\Library\Clients\Brex\API\Travel\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Travel\Runtime\Client\Endpoint
{
    protected $trip_id;
    /**
     * Retrieves a trip by ID.
     * @param string $tripId
     */
    public function __construct(string $tripId)
    {
        $this->trip_id = $tripId;
    }
    use \NxSys\Library\Clients\Brex\API\Travel\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{trip_id}'], [$this->trip_id], '/v1/trips/{trip_id}');
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
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Travel\Model\Trip
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Travel\Model\Trip', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripForbiddenException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripNotFoundException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}