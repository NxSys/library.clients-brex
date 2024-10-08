<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Transactions\Endpoint;

class ListPrimaryCardTransactions extends \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\EndpointTrait;

    /**
     * This endpoint lists all settled transactions for the primary card account.
     * Regular users may only fetch their own "PURCHASE","REFUND" and "CHARGEBACK" settled transactions.
     *
     * @param array $queryParameters {
     *
     * @var string $cursor
     * @var int    $limit
     * @var array  $user_ids
     * @var string $posted_at_start
     *             Shows only transactions with a `posted_at_date` on or after this date-time. This parameter is the date-time notation as defined by [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339#section-5.6)
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
        return '/v2/transactions/card/primary';
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
        $optionsResolver->setDefined(['cursor', 'limit', 'user_ids', 'posted_at_start', 'expand']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('cursor', ['string', 'null']);
        $optionsResolver->addAllowedTypes('limit', ['int', 'null']);
        $optionsResolver->addAllowedTypes('user_ids', ['array', 'null']);
        $optionsResolver->addAllowedTypes('posted_at_start', ['string', 'null']);
        $optionsResolver->addAllowedTypes('expand', ['array', 'null']);

        return $optionsResolver;
    }

    /**
     * @return \NxSys\Library\Clients\Brex\API\Transactions\Model\PageCardTransaction|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardTransactionsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardTransactionsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardTransactionsForbiddenException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Transactions\Model\PageCardTransaction', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardTransactionsBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardTransactionsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardTransactionsForbiddenException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}
