<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Team\Endpoint;

class ListCardsByUserId extends \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\EndpointTrait;

    /**
    Lists all cards by a `user_id`.
    Only cards with `limit_type = CARD` have `spend_controls`

     *
     * @param array $queryParameters {
     *
     *     @var string $user_id
     *     @var string $cursor
     *     @var int $limit
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/v2/cards';
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
        $optionsResolver->setDefined(['user_id', 'cursor', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('user_id', ['string', 'null']);
        $optionsResolver->addAllowedTypes('cursor', ['string', 'null']);
        $optionsResolver->addAllowedTypes('limit', ['int', 'null']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \NxSys\Library\Clients\Brex\API\Team\Model\PageCard|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\\Library\\Clients\\Brex\\API\\Team\\Model\\PageCard', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}
