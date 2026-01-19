<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Endpoint;

class GetFieldValueById extends \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\Endpoint
{
    protected $field_id;
    protected $brex_id;
    /**
     * Get a field value by field ID and field value ID
     * @param string $fieldId The Field Brex identifier
     * @param string $brexId The field value ID (`brex_id`) to retrieve.
     */
    public function __construct(string $fieldId, string $brexId)
    {
        $this->field_id = $fieldId;
        $this->brex_id = $brexId;
    }
    use \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{field_id}', '{brex_id}'], [$this->field_id, $this->brex_id], '/v1/fields/{field_id}/values/{brex_id}');
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
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Fields\Model\FieldValue
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Fields\Model\FieldValue', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdForbiddenException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdNotFoundException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}