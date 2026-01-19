<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Endpoint;

class GetAccountingRecord extends \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\Endpoint
{
    protected $record_id;
    /**
     * Retrieve a single accounting record by its unique identifier
     * @param string $recordId
     * @param array $queryParameters {
     *     @var bool $single_entry Whether to return single entry line items
     * }
     */
    public function __construct(string $recordId, array $queryParameters = [])
    {
        $this->record_id = $recordId;
        $this->queryParameters = $queryParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{record_id}'], [$this->record_id], '/v3/accounting/records/{record_id}');
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
        $optionsResolver->setDefined(['single_entry']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('single_entry', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailed
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailed', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordBadRequestException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordUnauthorizedException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordForbiddenException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordNotFoundException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\GetAccountingRecordInternalServerErrorException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}