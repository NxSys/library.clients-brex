<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Team\Endpoint;

class CreateLocation extends \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\EndpointTrait;

    /**
    This endpoint creates a new location.

     *
     * @param array $headerParameters {
     *
     *     @var string $Idempotency-Key
     * }
     */
    public function __construct(\NxSys\Library\Clients\Brex\API\Team\Model\CreateLocationRequest $requestBody, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/v2/locations';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Team\Model\CreateLocationRequest) {
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
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Idempotency-Key', ['string', 'null']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \NxSys\Library\Clients\Brex\API\Team\Model\LocationResponse|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\CreateLocationBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\CreateLocationUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\CreateLocationForbiddenException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\\Library\\Clients\\Brex\\API\\Team\\Model\\LocationResponse', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\CreateLocationBadRequestException();
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\CreateLocationUnauthorizedException();
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\CreateLocationForbiddenException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}
