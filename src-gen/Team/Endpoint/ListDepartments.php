<?php

namespace NxSys\Library\Clients\Brex\API\Team\Endpoint;

class ListDepartments extends \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\Endpoint
{
    /**
     *
     * This endpoint lists all departments.
     *
     * @param array $queryParameters {
     *     @var string $cursor
     *     @var int $limit
     *     @var string $name
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v2/departments';
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
        $optionsResolver->setDefined(['cursor', 'limit', 'name']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('cursor', ['string', 'null']);
        $optionsResolver->addAllowedTypes('limit', ['int', 'null']);
        $optionsResolver->addAllowedTypes('name', ['string', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListDepartmentsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListDepartmentsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListDepartmentsForbiddenException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Team\Model\PageDepartmentResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Team\Model\PageDepartmentResponse', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\ListDepartmentsBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\ListDepartmentsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Team\Exception\ListDepartmentsForbiddenException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}