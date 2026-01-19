<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Endpoint;

class QueryAccountingRecords extends \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\Endpoint
{
    /**
     * Query accounting records by IDs with optional filtering.
     * @param array $queryParameters {
     *     @var array $ids Filter by accounting record IDs. ID size is limited to 500. Example: `ids=accr_xxx&ids=accr_yyy`
     *     @var string $review_status Filter by review status. Supported values: `PREPARE`, `REVIEW`, `EXPORTED`, `READY_FOR_EXPORT`.
     *     @var float $limit Maximum number of records to return
     *     @var string $cursor Cursor for pagination
     *     @var bool $single_entry Whether to return single entry line items
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v3/accounting/records';
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
        $optionsResolver->setDefined(['ids', 'review_status', 'limit', 'cursor', 'single_entry']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 100]);
        $optionsResolver->addAllowedTypes('ids', ['array']);
        $optionsResolver->addAllowedTypes('review_status', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['float']);
        $optionsResolver->addAllowedTypes('cursor', ['string']);
        $optionsResolver->addAllowedTypes('single_entry', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\QueryAccountingRecordsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\QueryAccountingRecordsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\QueryAccountingRecordsForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\QueryAccountingRecordsInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordsResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordsResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\QueryAccountingRecordsBadRequestException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\QueryAccountingRecordsUnauthorizedException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\QueryAccountingRecordsForbiddenException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\QueryAccountingRecordsInternalServerErrorException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}