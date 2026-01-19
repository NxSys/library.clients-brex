<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Endpoint;

class UpdateField extends \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Update a field by ID
     * @param string $id The Brex identifier of the field to update
     * @param \NxSys\Library\Clients\Brex\API\Fields\Model\FieldUpdateBody $requestBody
     */
    public function __construct(string $id, \NxSys\Library\Clients\Brex\API\Fields\Model\FieldUpdateBody $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v1/fields/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Fields\Model\FieldUpdateBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldInternalServerErrorException
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
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldForbiddenException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldNotFoundException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}