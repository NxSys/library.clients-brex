<?php

namespace NxSys\Library\Clients\Brex\API\Expenses;

class Client extends \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client\Client
{
    /**
     * List expenses under the same account. Admin and bookkeeper have access to any expense, and regular users can only access their own.
     * @param array $queryParameters {
     *     @var array $expand[]
     *     @var array $user_id[]
     *     @var array $parent_expense_id[]
     *     @var string $cursor
     *     @var int $limit
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ListExpensesBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ListExpensesUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ListExpensesForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Expenses\Model\PageExpandableExpense : \Psr\Http\Message\ResponseInterface)
     */
    public function listExpenses(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Expenses\Endpoint\ListExpenses($queryParameters), $fetch);
    }
    /**
     *
     * The `uri` will be a pre-signed S3 URL allowing you to upload the receipt securely. This URL can only be used for a `PUT` operation and expires 30 minutes after its creation. Once your upload is complete, we will try to match the receipt with existing expenses.
     *
     * Refer to these [docs](https://docs.aws.amazon.com/AmazonS3/latest/dev/PresignedUrlUploadObject.html) on how to upload to this pre-signed S3 URL. We highly recommend using one of AWS SDKs if they're available for your language to upload these files.
     *
     * @param \NxSys\Library\Clients\Brex\API\Expenses\Model\ReceiptMatchRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptMatchBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptMatchUnauthorizedException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Expenses\Model\CreateAsyncFileUploadResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function receiptMatch(\NxSys\Library\Clients\Brex\API\Expenses\Model\ReceiptMatchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Expenses\Endpoint\ReceiptMatch($requestBody), $fetch);
    }
    /**
     * Get an expense by its ID.
     * @param string $expenseId
     * @param array $queryParameters {
     *     @var array $expand[]
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\GetExpenseBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\GetExpenseUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\GetExpenseForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\GetExpenseNotFoundException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpense : \Psr\Http\Message\ResponseInterface)
     */
    public function getExpense(string $expenseId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Expenses\Endpoint\GetExpense($expenseId, $queryParameters), $fetch);
    }
    /**
     * Update an expense. Admin and bookkeeper have access to any expense, and regular users can only access their own.
     * @param string $expenseId
     * @param \NxSys\Library\Clients\Brex\API\Expenses\Model\UpdateExpenseRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\UpdateExpenseBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\UpdateExpenseUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\UpdateExpenseForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\UpdateExpenseNotFoundException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Expenses\Model\Expense : \Psr\Http\Message\ResponseInterface)
     */
    public function updateExpense(string $expenseId, \NxSys\Library\Clients\Brex\API\Expenses\Model\UpdateExpenseRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Expenses\Endpoint\UpdateExpense($expenseId, $requestBody), $fetch);
    }
    /**
     *
     * The `uri` will be a pre-signed S3 URL allowing you to upload the receipt securely. This URL can only be used for a `PUT` operation and expires 30 minutes after its creation. Once your upload is complete, we will try to match the receipt with existing expenses.
     *
     * Refer to these [docs](https://docs.aws.amazon.com/AmazonS3/latest/dev/PresignedUrlUploadObject.html) on how to upload to this pre-signed S3 URL. We highly recommend using one of AWS SDKs if they're available for your language to upload these files.
     *
     * @param string $expenseId
     * @param \NxSys\Library\Clients\Brex\API\Expenses\Model\ReceiptUploadRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptUploadBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptUploadUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptUploadForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptUploadNotFoundException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Expenses\Model\CreateAsyncFileUploadResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function receiptUpload(string $expenseId, \NxSys\Library\Clients\Brex\API\Expenses\Model\ReceiptUploadRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Expenses\Endpoint\ReceiptUpload($expenseId, $requestBody), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \NxSys\Library\Clients\Brex\API\Expenses\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}