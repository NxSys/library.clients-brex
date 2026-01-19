<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Endpoint;

class UpdateFieldValues extends \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\Endpoint
{
    protected $field_id;
    /**
     * Update custom field values (up to 1000 values at once) for a specific field
     * @param string $fieldId The Field Brex identifier
     * @param \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueListBody $requestBody
     */
    public function __construct(string $fieldId, \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueListBody $requestBody)
    {
        $this->field_id = $fieldId;
        $this->body = $requestBody;
    }
    use \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{field_id}'], [$this->field_id], '/v1/fields/{field_id}/values');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueListBody) {
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
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueListResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueListResponse', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesForbiddenException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesNotFoundException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}