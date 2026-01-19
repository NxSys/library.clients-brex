<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Endpoint;

class CreateFieldValues extends \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\Endpoint
{
    protected $field_id;
    /**
     * Create custom field values (up to 1000 values at once) for a specific field
     * @param string $fieldId The Field Brex identifier
     * @param \NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueListBody $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key Idempotency key for this request.
     * }
     */
    public function __construct(string $fieldId, \NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueListBody $requestBody, array $headerParameters = [])
    {
        $this->field_id = $fieldId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{field_id}'], [$this->field_id], '/v1/fields/{field_id}/values');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueListBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Idempotency-Key']);
        $optionsResolver->setRequired(['Idempotency-Key']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Idempotency-Key', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueListResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueListResponse', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesForbiddenException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesNotFoundException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}