<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Endpoint;

class DeleteFieldValues extends \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\Endpoint
{
    protected $field_id;
    /**
     * Delete custom field values (up to 1000 values at once) for a specific field
     * @param string $fieldId The Field Brex identifier
     * @param \NxSys\Library\Clients\Brex\API\Fields\Model\DeleteFieldValueListBody $requestBody
     */
    public function __construct(string $fieldId, \NxSys\Library\Clients\Brex\API\Fields\Model\DeleteFieldValueListBody $requestBody)
    {
        $this->field_id = $fieldId;
        $this->body = $requestBody;
    }
    use \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{field_id}'], [$this->field_id], '/v1/fields/{field_id}/values');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Fields\Model\DeleteFieldValueListBody) {
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
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesForbiddenException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesNotFoundException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}