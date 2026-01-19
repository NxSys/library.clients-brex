<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Endpoint;

class CreateDocument extends \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Client\Endpoint
{
    protected $id;
    /**
     *
     * The `uri` will be a presigned S3 URL allowing you to upload the referral doc securely. This URL can only be used for a `PUT` operation and expires 30 minutes after its creation. Once your upload is complete, we will use this to prefill the application.
     *
     * Refer to these [docs](https://docs.aws.amazon.com/AmazonS3/latest/dev/PresignedUrlUploadObject.html) on how to upload to this presigned S3 URL. We highly recommend using one of AWS SDKs if they're available for your language to upload these files.
     *
     * @param string $id
     * @param \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateDocumentRequest $requestBody
     */
    public function __construct(string $id, \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateDocumentRequest $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v1/referrals/{id}/document_upload');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateDocumentRequest) {
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
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\CreateDocumentUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\CreateDocumentNotFoundException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Onboarding\Model\Document
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Onboarding\Model\Document', 'json');
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Onboarding\Exception\CreateDocumentUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Onboarding\Exception\CreateDocumentNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuth2ClientCredentials'];
    }
}