<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Endpoint;

class ListReferrals extends \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Client\Endpoint
{
    /**
     * Returns referrals created.
     * *Note*: This doesn't include referrals that have expired.
     *
     * @param array $queryParameters {
     *     @var string $cursor
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v1/referrals';
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
        $optionsResolver->setDefined(['cursor']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('cursor', ['string', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\ListReferralsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\ListReferralsUnauthorizedException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Onboarding\Model\ReferralPage
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Onboarding\Model\ReferralPage', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Onboarding\Exception\ListReferralsBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Onboarding\Exception\ListReferralsUnauthorizedException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuth2ClientCredentials'];
    }
}