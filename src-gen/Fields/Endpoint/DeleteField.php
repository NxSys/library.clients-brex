<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Endpoint;

class DeleteField extends \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Delete a custom field by Brex ID
     * @param string $id The Brex identifier of the field to delete
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v1/fields/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldForbiddenException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldNotFoundException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}