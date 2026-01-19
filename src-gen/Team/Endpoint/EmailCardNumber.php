<?php

namespace NxSys\Library\Clients\Brex\API\Team\Endpoint;

class EmailCardNumber extends \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\Endpoint
{
    protected $id;
    /**
     *
     * Creates a secure email to send card number, CVV, and expiration date of a card by ID to the specified email.
     *
     * This endpoint is currently gated. If you would like to request access, please reach out to
     * developer-access@brex.com
     *
     * @param string $id
     * @param \NxSys\Library\Clients\Brex\API\Team\Model\SecureEmailForCardDetailsRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     */
    public function __construct(string $id, \NxSys\Library\Clients\Brex\API\Team\Model\SecureEmailForCardDetailsRequest $requestBody, array $headerParameters = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v2/cards/{id}/secure_email');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Team\Model\SecureEmailForCardDetailsRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
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
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}