<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks;

class Client extends \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Client\Client
{
    /**
     * List the webhooks you have registered
     * @param array $queryParameters {
     *     @var string $cursor
     *     @var int $limit
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSubscriptionBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSubscriptionUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSubscriptionForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSubscriptionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Webhooks\Model\PageWebhookSubscription : \Psr\Http\Message\ResponseInterface)
     */
    public function listSubscription(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Webhooks\Endpoint\ListSubscription($queryParameters), $fetch);
    }
    /**
     * Register an endpoint to start receiving selected webhook events
     * @param \NxSys\Library\Clients\Brex\API\Webhooks\Model\CreateWebhookSubscriptionRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\CreateSubscriptionBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\CreateSubscriptionUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\CreateSubscriptionForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\CreateSubscriptionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSubscription : \Psr\Http\Message\ResponseInterface)
     */
    public function createSubscription(\NxSys\Library\Clients\Brex\API\Webhooks\Model\CreateWebhookSubscriptionRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Webhooks\Endpoint\CreateSubscription($requestBody, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSecretsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSecretsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSecretsForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\ListSecretsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSecret[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listSecrets(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Webhooks\Endpoint\ListSecrets(), $fetch);
    }
    /**
     * Unregister a webhook if you want to stop receiving webhook events
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\DeleteSubscriptionBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\DeleteSubscriptionUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\DeleteSubscriptionForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\DeleteSubscriptionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteSubscription(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Webhooks\Endpoint\DeleteSubscription($id), $fetch);
    }
    /**
     * Get details of a webhook
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\GetSubscriptionByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\GetSubscriptionByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\GetSubscriptionByIdForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\GetSubscriptionByIdInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSubscription : \Psr\Http\Message\ResponseInterface)
     */
    public function getSubscriptionById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Webhooks\Endpoint\GetSubscriptionById($id), $fetch);
    }
    /**
     * Update a webhook.
     * You can update the endpoint url, event types that the endpoint receives, or temporarily deactivate the webhook.
     *
     * @param string $id
     * @param \NxSys\Library\Clients\Brex\API\Webhooks\Model\UpdateWebhookSubscriptionRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Webhooks\Exception\UpdateSubscriptionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSubscription : \Psr\Http\Message\ResponseInterface)
     */
    public function updateSubscription(string $id, \NxSys\Library\Clients\Brex\API\Webhooks\Model\UpdateWebhookSubscriptionRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Webhooks\Endpoint\UpdateSubscription($id, $requestBody), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}