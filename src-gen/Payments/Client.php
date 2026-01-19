<?php

namespace NxSys\Library\Clients\Brex\API\Payments;

class Client extends \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\Client
{
    /**
     *
     * This endpoint creates a new incoming transfer. You may use use any eligible bank account connection to fund (ACH Debit)
     * any active Brex cash account.
     *
     * **Reminder**: You may not use the Brex API for any activity that requires a license or registration from any
     * governmental authority without Brex's prior review and approval. This includes but is not limited to any money services
     * business or money transmission activity.
     *
     * Please review the <a href="https://www.brex.com/legal/developer-portal/">Brex Access Agreement</a> and contact us if
     * you have any questions.
     *
     * @param \NxSys\Library\Clients\Brex\API\Payments\Model\CreateIncomingTransferRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Payments\Model\Transfer : \Psr\Http\Message\ResponseInterface)
     */
    public function createIncomingTransfer(\NxSys\Library\Clients\Brex\API\Payments\Model\CreateIncomingTransferRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Payments\Endpoint\CreateIncomingTransfer($requestBody, $headerParameters), $fetch);
    }
    /**
     *
     * This endpoint lists all bank connections that are eligible to make ACH transfers to Brex cash account
     *
     * @param array $queryParameters {
     *     @var string $cursor
     *     @var int $limit
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\ListLinkedAccountsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\ListLinkedAccountsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\ListLinkedAccountsForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Payments\Model\PageBankConnection : \Psr\Http\Message\ResponseInterface)
     */
    public function listLinkedAccounts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Payments\Endpoint\ListLinkedAccounts($queryParameters), $fetch);
    }
    /**
     *
     * This endpoint lists existing transfers for an account.
     *
     * Currently, the API can only return transfers for the following payment rails:
     * - ACH
     * - DOMESTIC_WIRE
     * - CHEQUE
     * - INTERNATIONAL_WIRE
     *
     * @param array $queryParameters {
     *     @var string $cursor
     *     @var int $limit
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\ListTransfersBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\ListTransfersUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\ListTransfersForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\ListTransfersInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Payments\Model\PageTransfer : \Psr\Http\Message\ResponseInterface)
     */
    public function listTransfers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Payments\Endpoint\ListTransfers($queryParameters), $fetch);
    }
    /**
     *
     * This endpoint creates a new transfer.
     *
     * Currently, the API can only create transfers for the following payment rails:
     * - ACH
     * - DOMESTIC_WIRE
     * - CHEQUE
     * - INTERNATIONAL_WIRES (For vendors already created through dashboard. Rate limited to 100/day - Please reach out to developer-support@brex.com if you need to do more)
     *
     * **Transaction Descriptions**
     * * For outgoing check payments, a successful transfer will return a response containing a description value with a format of `Check #<check number> to <recipient_name> - <external_memo>`.
     * * For book transfers (from one Brex Cash account to another), the recipient value will have a format of `<customer_account.dba_name> - <external_memo>` and the sender will have a format of `<target customer account's dba name> - <external_memo>`.
     * * For other payment rails, the format will be `<counterparty_name> - <external_memo>`, where Counterparty name is `payment_instrument.beneficiary_name` or `contact.name`
     * For vendors created from the Payments API, the `counterparty_name` will be the `company_name` [field](/openapi/payments_api/#operation/createVendor!path=company_name&t=request).
     *
     * **Reminder**: You may not use the Brex API for any activity that requires a license or registration from any
     * governmental authority without Brex's prior review and approval. This includes but is not limited to any money services
     * business or money transmission activity.
     *
     * Please review the <a href="https://www.brex.com/legal/developer-portal/">Brex Access Agreement</a> and contact us if
     * you have any questions.
     *
     * @param \NxSys\Library\Clients\Brex\API\Payments\Model\CreateTransferRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Payments\Model\Transfer : \Psr\Http\Message\ResponseInterface)
     */
    public function createTransfer(\NxSys\Library\Clients\Brex\API\Payments\Model\CreateTransferRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Payments\Endpoint\CreateTransfer($requestBody, $headerParameters), $fetch);
    }
    /**
     *
     * This endpoint gets a transfer by ID.
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetTransfersByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetTransfersByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetTransfersByIdForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetTransfersByIdInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Payments\Model\Transfer : \Psr\Http\Message\ResponseInterface)
     */
    public function getTransfersById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Payments\Endpoint\GetTransfersById($id), $fetch);
    }
    /**
     *
     * This endpoint lists all existing vendors for an account.
     * Takes an optional parameter to match by vendor name.
     *
     * @param array $queryParameters {
     *     @var string $cursor
     *     @var int $limit
     *     @var string $name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\ListVendorsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\ListVendorsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\ListVendorsForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Payments\Model\PageVendorResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function listVendors(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Payments\Endpoint\ListVendors($queryParameters), $fetch);
    }
    /**
     *
     * This endpoint creates a new vendor.
     *
     * @param \NxSys\Library\Clients\Brex\API\Payments\Model\CreateVendorRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Payments\Model\VendorResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function createVendor(\NxSys\Library\Clients\Brex\API\Payments\Model\CreateVendorRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Payments\Endpoint\CreateVendor($requestBody, $headerParameters), $fetch);
    }
    /**
     *
     * This endpoint deletes a vendor by ID.
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteVendor(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Payments\Endpoint\DeleteVendor($id), $fetch);
    }
    /**
     *
     * This endpoint gets a vendor by ID.
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetVendorByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetVendorByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetVendorByIdForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Payments\Exception\GetVendorByIdInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Payments\Model\VendorResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function getVendorById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Payments\Endpoint\GetVendorById($id), $fetch);
    }
    /**
     *
     *     Updates an existing vendor by ID.
     *
     * @param string $id
     * @param \NxSys\Library\Clients\Brex\API\Payments\Model\UpdateVendorRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Payments\Model\VendorResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function updateVendor(string $id, \NxSys\Library\Clients\Brex\API\Payments\Model\UpdateVendorRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Payments\Endpoint\UpdateVendor($id, $requestBody, $headerParameters), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \NxSys\Library\Clients\Brex\API\Payments\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}