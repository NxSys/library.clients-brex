<?php

namespace NxSys\Library\Clients\Brex\API\Accounting;

class Client extends \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\Client
{
    /**
     * Create a new accounting integration. The behavior depends on the existing active integration:
     *
     * - If no active integration exists: Creates and returns new integration
     * - If active integration exists with same vendor and vendor_account_id: Returns the existing active integration
     * - If active integration exists with same vendor but different vendor_account_id: Returns 409 error
     * - If active integration exists with different vendor: Returns 409 error
     *
     * This ensures only one active integration exists per account.
     * @param \NxSys\Library\Clients\Brex\API\Accounting\Model\CreateIntegrationRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationConflictException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Accounting\Model\Integration : \Psr\Http\Message\ResponseInterface)
     */
    public function createIntegration(\NxSys\Library\Clients\Brex\API\Accounting\Model\CreateIntegrationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Accounting\Endpoint\CreateIntegration($requestBody), $fetch);
    }
    /**
     * Disconnect an active accounting integration.
     *
     * - If integration is ACTIVE: Disconnects and returns success
     * - If integration ID doesn't exist: Returns 404 error
     * - If integration is not currently active: Returns 409 error
     * @param string $integrationId
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\DisconnectIntegrationUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\DisconnectIntegrationForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\DisconnectIntegrationNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\DisconnectIntegrationConflictException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\DisconnectIntegrationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Accounting\Model\Integration : \Psr\Http\Message\ResponseInterface)
     */
    public function disconnectIntegration(string $integrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Accounting\Endpoint\DisconnectIntegration($integrationId), $fetch);
    }
    /**
     * Reactivate a disconnected accounting integration.
     *
     * - If integration is DISABLED: Reactivates and returns success
     * - If integration ID doesn't exist: Returns 404 error
     * - If an active integration already exists: Returns 409 error
     * @param string $integrationId
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationConflictException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Accounting\Model\Integration : \Psr\Http\Message\ResponseInterface)
     */
    public function reactivateIntegration(string $integrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Accounting\Endpoint\ReactivateIntegration($integrationId), $fetch);
    }
    /**
     * Retrieve a single accounting record by its unique identifier
     * @param string $recordId
     * @param array $queryParameters {
     *     @var bool $single_entry Whether to return single entry line items
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailed : \Psr\Http\Message\ResponseInterface)
     */
    public function getAccountingRecord(string $recordId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Accounting\Endpoint\GetAccountingRecord($recordId, $queryParameters), $fetch);
    }
    /**
     * Query accounting records by IDs with optional filtering.
     * @param array $queryParameters {
     *     @var array $ids Filter by accounting record IDs. ID size is limited to 500. Example: `ids=accr_xxx&ids=accr_yyy`
     *     @var string $review_status Filter by review status. Supported values: `PREPARE`, `REVIEW`, `EXPORTED`, `READY_FOR_EXPORT`.
     *     @var float $limit Maximum number of records to return
     *     @var string $cursor Cursor for pagination
     *     @var bool $single_entry Whether to return single entry line items
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\QueryAccountingRecordsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\QueryAccountingRecordsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\QueryAccountingRecordsForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\QueryAccountingRecordsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordsResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function queryAccountingRecords(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Accounting\Endpoint\QueryAccountingRecords($queryParameters), $fetch);
    }
    /**
     * Report export success or failure for accounting records.
     * @param \NxSys\Library\Clients\Brex\API\Accounting\Model\ReportExportResultsRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReportAccountingExportResultsNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReportAccountingExportResultsUnprocessableEntityException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReportAccountingExportResultsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Accounting\Model\ExportResultsResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function reportAccountingExportResults(\NxSys\Library\Clients\Brex\API\Accounting\Model\ReportExportResultsRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Accounting\Endpoint\ReportAccountingExportResults($requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.brex.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}