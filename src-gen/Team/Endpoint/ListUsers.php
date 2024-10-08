<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Team\Endpoint;

class ListUsers extends \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\EndpointTrait;

    /**
     * This endpoint lists all users. To find a user id by email, you can filter using the `email` query parameter.
     *
     * @param array $queryParameters {
     *
     * @var string $cursor
     * @var int    $limit
     * @var string $email
     * @var array  $expand[]
     *             }
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
        return '/v2/users';
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
        $optionsResolver->setDefined(['cursor', 'limit', 'email', 'expand']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('cursor', ['string', 'null']);
        $optionsResolver->addAllowedTypes('limit', ['int', 'null']);
        $optionsResolver->addAllowedTypes('email', ['string', 'null']);
        $optionsResolver->addAllowedTypes('expand', ['array', 'null']);

        return $optionsResolver;
    }

    /**
     * @return \NxSys\Library\Clients\Brex\API\Team\Model\PageUserResponse|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListUsersBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListUsersUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListUsersForbiddenException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Team\Model\PageUserResponse', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\ListUsersBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\ListUsersUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\ListUsersForbiddenException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}
