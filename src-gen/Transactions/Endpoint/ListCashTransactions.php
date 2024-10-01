<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Transactions\Endpoint;

class ListCashTransactions extends \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * This endpoint lists all transactions for the cash account with the selected ID.
     *
     * @param array $queryParameters {
     *
     * @var string $cursor
     * @var int    $limit
     * @var string $posted_at_start
     *             Shows only transactions with a `posted_at_date` on or after this date-time. This parameter is the date-time notation as defined by [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339#section-5.6)
     *
     * }
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
        return str_replace(['{id}'], [$this->id], '/v2/transactions/cash/{id}');
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
        $optionsResolver->setDefined(['cursor', 'limit', 'posted_at_start']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('cursor', ['string', 'null']);
        $optionsResolver->addAllowedTypes('limit', ['int', 'null']);
        $optionsResolver->addAllowedTypes('posted_at_start', ['string', 'null']);

        return $optionsResolver;
    }

    /**
     * @return \NxSys\Library\Clients\Brex\API\Transactions\Model\PageCashTransaction|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashTransactionsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashTransactionsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashTransactionsForbiddenException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Transactions\Model\PageCashTransaction', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashTransactionsBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashTransactionsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashTransactionsForbiddenException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}
