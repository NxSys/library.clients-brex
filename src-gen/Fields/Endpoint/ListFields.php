<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Endpoint;

class ListFields extends \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\Endpoint
{
    /**
     * List custom fields under the same account
     * @param array $queryParameters {
     *     @var array $field_id[] The Brex identifiers of the field to filter by
     *     @var string $cursor The cursor to use for pagination. This is the `next_cursor` value returned from the previous response.
     *     @var int $limit Controls the maximum number of field values returned in the response. It can't be greater than 1000.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v1/fields';
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
        $optionsResolver->setDefined(['field_id', 'cursor', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('field_id', ['array', 'null']);
        $optionsResolver->addAllowedTypes('cursor', ['string', 'null']);
        $optionsResolver->addAllowedTypes('limit', ['int', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldsForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldsInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Fields\Model\PageField
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Fields\Model\PageField', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldsBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldsForbiddenException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldsInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}