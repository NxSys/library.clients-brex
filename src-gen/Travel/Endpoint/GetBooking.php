<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Endpoint;

class GetBooking extends \NxSys\Library\Clients\Brex\API\Travel\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Travel\Runtime\Client\Endpoint
{
    protected $trip_id;
    protected $booking_id;
    /**
     * Retrieves a booking by trip and booking ID.
     * @param string $tripId
     * @param string $bookingId
     */
    public function __construct(string $tripId, string $bookingId)
    {
        $this->trip_id = $tripId;
        $this->booking_id = $bookingId;
    }
    use \NxSys\Library\Clients\Brex\API\Travel\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{trip_id}', '{booking_id}'], [$this->trip_id, $this->booking_id], '/v1/trips/{trip_id}/bookings/{booking_id}');
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
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Travel\Model\Booking
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Travel\Model\Booking', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingForbiddenException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingNotFoundException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}