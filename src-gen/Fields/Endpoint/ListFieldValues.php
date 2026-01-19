<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Endpoint;

class ListFieldValues extends \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\Endpoint
{
    protected $field_id;
    /**
     * List values under the same custom field
     * @param string $fieldId The Field Brex identifier
     * @param array $queryParameters {
     *     @var array $brex_id[] Field value Brex identifier(s) to filter by
     *     @var array $value_id[] Field value identifier(s) to filter by
     *     @var array $remote_id[] Field value remote identifier(s) to filter by
     *     @var string $cursor The cursor to use for pagination. This is the `next_cursor` value returned from the previous response.
     *     @var int $limit Controls the maximum number of field values returned in the response. It can't be greater than 1000.
     *     @var string $value Field value's value to filter by
     * }
     */
    public function __construct(string $fieldId, array $queryParameters = [])
    {
        $this->field_id = $fieldId;
        $this->queryParameters = $queryParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{field_id}'], [$this->field_id], '/v1/fields/{field_id}/values');
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
        $optionsResolver->setDefined(['brex_id', 'value_id', 'remote_id', 'cursor', 'limit', 'value']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('brex_id', ['array', 'null']);
        $optionsResolver->addAllowedTypes('value_id', ['array', 'null']);
        $optionsResolver->addAllowedTypes('remote_id', ['array', 'null']);
        $optionsResolver->addAllowedTypes('cursor', ['string', 'null']);
        $optionsResolver->addAllowedTypes('limit', ['int', 'null']);
        $optionsResolver->addAllowedTypes('value', ['string', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldValuesBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldValuesUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldValuesForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldValuesInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Fields\Model\PageFieldValue
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Fields\Model\PageFieldValue', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldValuesBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldValuesUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldValuesForbiddenException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldValuesInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}