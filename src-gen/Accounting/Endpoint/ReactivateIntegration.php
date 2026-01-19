<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Endpoint;

class ReactivateIntegration extends \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\Endpoint
{
    protected $integration_id;
    /**
     * Reactivate a disconnected accounting integration.
     *
     * - If integration is DISABLED: Reactivates and returns success
     * - If integration ID doesn't exist: Returns 404 error
     * - If an active integration already exists: Returns 409 error
     * @param string $integrationId
     */
    public function __construct(string $integrationId)
    {
        $this->integration_id = $integrationId;
    }
    use \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{integration_id}'], [$this->integration_id], '/v3/accounting/integration/{integration_id}/reactivate');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationConflictException
     * @throws \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationInternalServerErrorException
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
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationUnauthorizedException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationForbiddenException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationNotFoundException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationConflictException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \NxSys\Library\Clients\Brex\API\Accounting\Exception\ReactivateIntegrationInternalServerErrorException($serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}