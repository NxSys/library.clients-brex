<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Endpoint;

class GetFieldById extends \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Get a custom field by Brex ID
     * @param string $id The Brex identifier of the field to retrieve
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v1/fields/{id}');
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
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Fields\Model\Field
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Fields\Model\Field', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdForbiddenException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}