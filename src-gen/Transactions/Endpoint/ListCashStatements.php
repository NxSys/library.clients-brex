<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Transactions\Endpoint;

class ListCashStatements extends \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * This endpoint lists all finalized statements for the cash account by ID.
     *
     * @param array $queryParameters {
     *
     * @var string $cursor
     * @var int    $limit
     *             }
     */
    public function __construct(string $id, array $queryParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v2/accounts/cash/{id}/statements');
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
     * @return \NxSys\Library\Clients\Brex\API\Transactions\Model\PageStatement|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashStatementsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashStatementsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashStatementsForbiddenException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Transactions\Model\PageStatement', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashStatementsBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashStatementsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashStatementsForbiddenException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}
