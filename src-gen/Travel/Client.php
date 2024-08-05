<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Travel;

class Client extends \NxSys\Library\Clients\Brex\API\Travel\Runtime\Client\Client
{
    /**
     * Lists trips according to the filters passed in the query string.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor
     *     @var int $limit
     *     @var string $last_updated_after
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \NxSys\Library\Clients\Brex\API\Travel\Model\PageTrip|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripsForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripsInternalServerErrorException
     */
    public function listTrips(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Travel\Endpoint\ListTrips($queryParameters), $fetch);
    }

    /**
     * Retrieves a trip by ID.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \NxSys\Library\Clients\Brex\API\Travel\Model\Trip|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetTripInternalServerErrorException
     */
    public function getTrip(string $tripId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Travel\Endpoint\GetTrip($tripId), $fetch);
    }

    /**
     * Lists the bookings within a trip.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor
     *     @var int $limit
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \NxSys\Library\Clients\Brex\API\Travel\Model\PageBooking|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripBookingsInternalServerErrorException
     */
    public function listTripBookings(string $tripId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Travel\Endpoint\ListTripBookings($tripId, $queryParameters), $fetch);
    }

    /**
     * Retrieves a booking by trip and booking ID.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \NxSys\Library\Clients\Brex\API\Travel\Model\Booking|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\GetBookingInternalServerErrorException
     */
    public function getBooking(string $tripId, string $bookingId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Travel\Endpoint\GetBooking($tripId, $bookingId), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://platform.brexapis.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \NxSys\Library\Clients\Brex\API\Travel\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}