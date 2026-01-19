<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Endpoint;

class CreateIntegration extends \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\Endpoint
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
     */
    public function __construct(\NxSys\Library\Clients\Brex\API\Accounting\Model\CreateIntegrationRequest $requestBody)
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
        return '/v3/accounting/integration';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Accounting\Model\CreateIntegrationRequest) {
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
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationConflictException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationInternalServerErrorException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Accounting\Model\Integration
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\Integration', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationBadRequestException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationUnauthorizedException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationForbiddenException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationConflictException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\CreateIntegrationInternalServerErrorException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}