<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Endpoint;

class CreateVendor extends \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\Endpoint
{
    /**
     *
     * This endpoint creates a new vendor.
     *
     * @param \NxSys\Library\Clients\Brex\API\Payments\Model\CreateVendorRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     */
    public function __construct(\NxSys\Library\Clients\Brex\API\Payments\Model\CreateVendorRequest $requestBody, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v1/vendors';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Payments\Model\CreateVendorRequest) {
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
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Payments\Model\VendorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Payments\Model\VendorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}