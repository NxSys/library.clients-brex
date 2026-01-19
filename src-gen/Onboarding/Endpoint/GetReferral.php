<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Endpoint;

class GetReferral extends \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Returns a referral object by ID if it exists.
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v1/referrals/{id}');
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
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\GetReferralUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\GetReferralNotFoundException
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
            throw new \NxSys\Library\Clients\Brex\API\Onboarding\Exception\GetReferralUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Onboarding\Exception\GetReferralNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuth2ClientCredentials'];
    }
}