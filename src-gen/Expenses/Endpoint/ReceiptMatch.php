<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Expenses\Endpoint;

class ReceiptMatch extends \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client\EndpointTrait;

    /**
    The `uri` will be a pre-signed S3 URL allowing you to upload the receipt securely. This URL can only be used for a `PUT` operation and expires 30 minutes after its creation. Once your upload is complete, we will try to match the receipt with existing expenses.

    Refer to these [docs](https://docs.aws.amazon.com/AmazonS3/latest/dev/PresignedUrlUploadObject.html) on how to upload to this pre-signed S3 URL. We highly recommend using one of AWS SDKs if they're available for your language to upload these files.
     */
    public function __construct(\NxSys\Library\Clients\Brex\API\Expenses\Model\ReceiptMatchRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/v1/expenses/card/receipt_match';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Expenses\Model\ReceiptMatchRequest) {
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
     * @return \NxSys\Library\Clients\Brex\API\Expenses\Model\CreateAsyncFileUploadResponse|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptMatchBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptMatchUnauthorizedException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\\Library\\Clients\\Brex\\API\\Expenses\\Model\\CreateAsyncFileUploadResponse', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptMatchBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\ReceiptMatchUnauthorizedException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['oAuth2ClientCredentials'];
    }
}
