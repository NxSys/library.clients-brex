<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding;

class Client extends \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Client\Client
{
    /**
     * Returns referrals created.
     * *Note*: This doesn't include referrals that have expired.
     *
     * @param array $queryParameters {
     *     @var string $cursor
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\ListReferralsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\ListReferralsUnauthorizedException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Onboarding\Model\ReferralPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listReferrals(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Onboarding\Endpoint\ListReferrals($queryParameters), $fetch);
    }
    /**
     * This creates new referrals. The response will contain an identifier and a unique personalized link to an application flow. Many fields are optional and when they're provided they'll prefill the application flow for Brex.  You should handle and store these references securely as they contain sensitive information about the referral.
     * @param \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateReferralRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\CreateReferralRequestUnauthorizedException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Onboarding\Model\Referral : \Psr\Http\Message\ResponseInterface)
     */
    public function createReferralRequest(\NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateReferralRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Onboarding\Endpoint\CreateReferralRequest($requestBody), $fetch);
    }
    /**
     * Returns a referral object by ID if it exists.
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\GetReferralUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\GetReferralNotFoundException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Onboarding\Model\Referral : \Psr\Http\Message\ResponseInterface)
     */
    public function getReferral(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Onboarding\Endpoint\GetReferral($id), $fetch);
    }
    /**
     *
     * The `uri` will be a presigned S3 URL allowing you to upload the referral doc securely. This URL can only be used for a `PUT` operation and expires 30 minutes after its creation. Once your upload is complete, we will use this to prefill the application.
     *
     * Refer to these [docs](https://docs.aws.amazon.com/AmazonS3/latest/dev/PresignedUrlUploadObject.html) on how to upload to this presigned S3 URL. We highly recommend using one of AWS SDKs if they're available for your language to upload these files.
     *
     * @param string $id
     * @param \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateDocumentRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\CreateDocumentUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Onboarding\Exception\CreateDocumentNotFoundException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Onboarding\Model\Document : \Psr\Http\Message\ResponseInterface)
     */
    public function createDocument(string $id, \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateDocumentRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Onboarding\Endpoint\CreateDocument($id, $requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://platform.brexapis.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}