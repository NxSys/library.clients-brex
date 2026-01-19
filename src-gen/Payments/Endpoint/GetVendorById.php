<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Endpoint;

class GetVendorById extends \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\Endpoint
{
    protected $id;
    /**
     *
     * This endpoint gets a vendor by ID.
     *
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v1/vendors/{id}');
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
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetVendorByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetVendorByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetVendorByIdForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetVendorByIdInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Payments\Model\VendorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Payments\Model\VendorResponse', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Payments\Exception\GetVendorByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Payments\Exception\GetVendorByIdUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Payments\Exception\GetVendorByIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Payments\Exception\GetVendorByIdInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}