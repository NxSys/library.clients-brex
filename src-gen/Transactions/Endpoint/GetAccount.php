<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Transactions\Endpoint;

class GetAccount extends \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Client\EndpointTrait;
    protected $id;

    /**
    This endpoint returns the cash account associated with the provided ID with its status.
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v2/accounts/cash/{id}');
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
     * @return \NxSys\Library\Clients\Brex\API\Transactions\Model\CashAccount|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\GetAccountBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\GetAccountUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Transactions\Exception\GetAccountForbiddenException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\\Library\\Clients\\Brex\\API\\Transactions\\Model\\CashAccount', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\GetAccountBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\GetAccountUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Transactions\Exception\GetAccountForbiddenException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}
