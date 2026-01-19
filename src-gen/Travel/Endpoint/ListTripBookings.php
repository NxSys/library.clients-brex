<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Endpoint;

class ListTripBookings extends \NxSys\Library\Clients\Brex\API\Travel\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Travel\Runtime\Client\Endpoint
{
    protected $trip_id;
    /**
     * Lists the bookings within a trip.
     * @param string $tripId
     * @param array $queryParameters {
     *     @var string $cursor
     *     @var int $limit
     * }
     */
    public function __construct(string $tripId, array $queryParameters = [])
    {
        $this->trip_id = $tripId;
        $this->queryParameters = $queryParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Travel\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{trip_id}'], [$this->trip_id], '/v1/trips/{trip_id}/bookings');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['cursor', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('cursor', ['string', 'null']);
        $optionsResolver->addAllowedTypes('limit', ['int', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Travel\Model\PageBooking
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Travel\Model\PageBooking', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsForbiddenException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsNotFoundException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}