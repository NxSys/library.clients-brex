<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Endpoint;

class ListTrips extends \NxSys\Library\Clients\Brex\API\Travel\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Travel\Runtime\Client\Endpoint
{
    /**
     * Lists trips according to the filters passed in the query string.
     * @param array $queryParameters {
     *     @var string $cursor
     *     @var int $limit
     *     @var string $last_updated_after
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Travel\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v1/trips';
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
        $optionsResolver->setDefined(['cursor', 'limit', 'last_updated_after']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('cursor', ['string', 'null']);
        $optionsResolver->addAllowedTypes('limit', ['int', 'null']);
        $optionsResolver->addAllowedTypes('last_updated_after', ['string', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripsForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripsInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Travel\Model\PageTrip
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Travel\Model\PageTrip', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripsBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripsForbiddenException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Travel\Exception\ListTripsInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}