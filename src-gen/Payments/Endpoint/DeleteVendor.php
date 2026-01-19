<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Endpoint;

class DeleteVendor extends \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\Endpoint
{
    protected $id;
    /**
     *
     * This endpoint deletes a vendor by ID.
     *
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v1/vendors/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}