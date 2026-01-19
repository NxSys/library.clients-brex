<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Endpoint;

class CreateField extends \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\Endpoint
{
    /**
     * Create a custom field
     * @param \NxSys\Library\Clients\Brex\API\Fields\Model\FieldCreateBody $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key Idempotency key for this request.
     * }
     */
    public function __construct(\NxSys\Library\Clients\Brex\API\Fields\Model\FieldCreateBody $requestBody, array $headerParameters = [])
    {
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
        return '/v1/fields';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Fields\Model\FieldCreateBody) {
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
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldInternalServerErrorException
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
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldForbiddenException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldNotFoundException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}