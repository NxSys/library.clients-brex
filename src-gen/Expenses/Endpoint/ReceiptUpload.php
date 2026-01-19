<?php

namespace NxSys\Library\Clients\Brex\API\Expenses\Endpoint;

class ReceiptUpload extends \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client\Endpoint
{
    protected $expense_id;
    /**
     *
     * The `uri` will be a pre-signed S3 URL allowing you to upload the receipt securely. This URL can only be used for a `PUT` operation and expires 30 minutes after its creation. Once your upload is complete, we will try to match the receipt with existing expenses.
     *
     * Refer to these [docs](https://docs.aws.amazon.com/AmazonS3/latest/dev/PresignedUrlUploadObject.html) on how to upload to this pre-signed S3 URL. We highly recommend using one of AWS SDKs if they're available for your language to upload these files.
     *
     * @param string $expenseId
     * @param \NxSys\Library\Clients\Brex\API\Expenses\Model\ReceiptUploadRequest $requestBody
     */
    public function __construct(string $expenseId, \NxSys\Library\Clients\Brex\API\Expenses\Model\ReceiptUploadRequest $requestBody)
    {
        $this->expense_id = $expenseId;
        $this->body = $requestBody;
    }
    use \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{expense_id}'], [$this->expense_id], '/v1/expenses/card/{expense_id}/receipt_upload');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Expenses\Model\ReceiptUploadRequest) {
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
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptUploadBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptUploadUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptUploadForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptUploadNotFoundException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Expenses\Model\CreateAsyncFileUploadResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Expenses\Model\CreateAsyncFileUploadResponse', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptUploadBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptUploadUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptUploadForbiddenException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptUploadNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuth2ClientCredentials'];
    }
}