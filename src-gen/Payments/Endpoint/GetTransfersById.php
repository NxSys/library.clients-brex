<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Payments\Endpoint;

class GetTransfersById extends \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * This endpoint gets a transfer by ID.
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
        return str_replace(['{id}'], [$this->id], '/v1/transfers/{id}');
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
     * @return \NxSys\Library\Clients\Brex\API\Payments\Model\Transfer|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetTransfersByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetTransfersByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetTransfersByIdForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetTransfersByIdInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Payments\Model\Transfer', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Payments\Exception\GetTransfersByIdBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Payments\Exception\GetTransfersByIdUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Payments\Exception\GetTransfersByIdForbiddenException($response);
        }
        if (500 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Payments\Exception\GetTransfersByIdInternalServerErrorException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}
