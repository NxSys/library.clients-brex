<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Endpoint;

class CreateReferralRequest extends \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Client\Endpoint
{
    /**
     * This creates new referrals. The response will contain an identifier and a unique personalized link to an application flow. Many fields are optional and when they're provided they'll prefill the application flow for Brex.  You should handle and store these references securely as they contain sensitive information about the referral.
     * @param \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateReferralRequest $requestBody
     */
    public function __construct(\NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateReferralRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v1/referrals';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateReferralRequest) {
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
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\CreateReferralRequestUnauthorizedException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Onboarding\Model\Referral
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Onboarding\Model\Referral', 'json');
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Onboarding\Exception\CreateReferralRequestUnauthorizedException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuth2ClientCredentials'];
    }
}