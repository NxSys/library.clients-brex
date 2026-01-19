<?php

namespace NxSys\Library\Clients\Brex\API\Transactions;

class Client extends \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCardAccountsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCardAccountsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCardAccountsForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Transactions\Model\CardAccount[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listCardAccounts(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Transactions\Endpoint\ListCardAccounts(), $fetch);
    }
    /**
     *
     * This endpoint lists all finalized statements for the primary card account.
     *
     * @param array $queryParameters {
     *     @var string $cursor
     *     @var int $limit
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardStatementsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardStatementsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardStatementsForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Transactions\Model\PageStatement : \Psr\Http\Message\ResponseInterface)
     */
    public function listPrimaryCardStatements(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Transactions\Endpoint\ListPrimaryCardStatements($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListAccountsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListAccountsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListAccountsForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Transactions\Model\PageCashAccount : \Psr\Http\Message\ResponseInterface)
     */
    public function listAccounts(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Transactions\Endpoint\ListAccounts(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\GetPrimaryAccountBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\GetPrimaryAccountUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\GetPrimaryAccountForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Transactions\Model\CashAccount : \Psr\Http\Message\ResponseInterface)
     */
    public function getPrimaryAccount(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Transactions\Endpoint\GetPrimaryAccount(), $fetch);
    }
    /**
     *
     * This endpoint returns the cash account associated with the provided ID with its status.
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\GetAccountBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\GetAccountUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\GetAccountForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Transactions\Model\CashAccount : \Psr\Http\Message\ResponseInterface)
     */
    public function getAccount(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Transactions\Endpoint\GetAccount($id), $fetch);
    }
    /**
     *
     * This endpoint lists all finalized statements for the cash account by ID.
     *
     * @param string $id
     * @param array $queryParameters {
     *     @var string $cursor
     *     @var int $limit
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashStatementsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashStatementsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashStatementsForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Transactions\Model\PageStatement : \Psr\Http\Message\ResponseInterface)
     */
    public function listCashStatements(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Transactions\Endpoint\ListCashStatements($id, $queryParameters), $fetch);
    }
    /**
    *
    * This endpoint lists all settled transactions for the primary card account.
    * Regular users may only fetch their own "PURCHASE","REFUND" and "CHARGEBACK" settled transactions.
    *
    * @param array $queryParameters {
    *     @var string $cursor
    *     @var int $limit
    *     @var array $user_ids
    *     @var string $posted_at_start 
    Shows only transactions with a `posted_at_date` on or after this date-time. This parameter is the date-time notation as defined by [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339#section-5.6)
    *     @var array $expand[]
    * }
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardTransactionsBadRequestException
    * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardTransactionsUnauthorizedException
    * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListPrimaryCardTransactionsForbiddenException
    *
    * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Transactions\Model\PageCardTransaction : \Psr\Http\Message\ResponseInterface)
    */
    public function listPrimaryCardTransactions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Transactions\Endpoint\ListPrimaryCardTransactions($queryParameters), $fetch);
    }
    /**
    *
    * This endpoint lists all transactions for the cash account with the selected ID.
    *
    * @param string $id
    * @param array $queryParameters {
    *     @var string $cursor
    *     @var int $limit
    *     @var string $posted_at_start 
    Shows only transactions with a `posted_at_date` on or after this date-time. This parameter is the date-time notation as defined by [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339#section-5.6)
    * }
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashTransactionsBadRequestException
    * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashTransactionsUnauthorizedException
    * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\ListCashTransactionsForbiddenException
    *
    * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Transactions\Model\PageCashTransaction : \Psr\Http\Message\ResponseInterface)
    */
    public function listCashTransactions(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Transactions\Endpoint\ListCashTransactions($id, $queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://platform.brexapis.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}