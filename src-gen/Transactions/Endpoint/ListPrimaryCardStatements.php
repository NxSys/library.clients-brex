<?php

namespace NxSys\Library\Clients\Brex\API\Transactions\Endpoint;

class ListPrimaryCardStatements extends \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\Endpoint
{
    /**
     *
     * This endpoint lists all finalized statements for the primary card account.
     *
     * @param array $queryParameters {
     *     @var string $cursor
     *     @var int $limit
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v2/accounts/card/primary/statements';
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
        $optionsResolver->setDefined(['cursor', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('cursor', ['string', 'null']);
        $optionsResolver->addAllowedTypes('limit', ['int', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardStatementsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardStatementsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardStatementsForbiddenException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Transactions\Model\PageStatement
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Transactions\Model\PageStatement', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardStatementsBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardStatementsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardStatementsForbiddenException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}