<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Endpoint;

class ReportAccountingExportResults extends \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\Endpoint
{
    /**
     * Report export success or failure for accounting records.
     * @param \NxSys\Library\Clients\Brex\API\Accounting\Model\ReportExportResultsRequest $requestBody
     */
    public function __construct(\NxSys\Library\Clients\Brex\API\Accounting\Model\ReportExportResultsRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v3/accounting/records/export-results';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Accounting\Model\ReportExportResultsRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReportAccountingExportResultsNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReportAccountingExportResultsUnprocessableEntityException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReportAccountingExportResultsInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Accounting\Model\ExportResultsResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\ExportResultsResponse', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReportAccountingExportResultsNotFoundException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReportAccountingExportResultsUnprocessableEntityException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReportAccountingExportResultsInternalServerErrorException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}