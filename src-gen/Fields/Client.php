<?php

namespace NxSys\Library\Clients\Brex\API\Fields;

class Client extends \NxSys\Library\Clients\Brex\API\Fields\Runtime\Client\Client
{
    /**
     * List custom fields under the same account
     * @param array $queryParameters {
     *     @var array $field_id[] The Brex identifiers of the field to filter by
     *     @var string $cursor The cursor to use for pagination. This is the `next_cursor` value returned from the previous response.
     *     @var int $limit Controls the maximum number of field values returned in the response. It can't be greater than 1000.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldsForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Fields\Model\PageField : \Psr\Http\Message\ResponseInterface)
     */
    public function listFields(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Fields\Endpoint\ListFields($queryParameters), $fetch);
    }
    /**
     * Create a custom field
     * @param \NxSys\Library\Clients\Brex\API\Fields\Model\FieldCreateBody $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key Idempotency key for this request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Fields\Model\Field : \Psr\Http\Message\ResponseInterface)
     */
    public function createField(\NxSys\Library\Clients\Brex\API\Fields\Model\FieldCreateBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Fields\Endpoint\CreateField($requestBody, $headerParameters), $fetch);
    }
    /**
     * Delete custom field values (up to 1000 values at once) for a specific field
     * @param string $fieldId The Field Brex identifier
     * @param \NxSys\Library\Clients\Brex\API\Fields\Model\DeleteFieldValueListBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldValuesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteFieldValues(string $fieldId, \NxSys\Library\Clients\Brex\API\Fields\Model\DeleteFieldValueListBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Fields\Endpoint\DeleteFieldValues($fieldId, $requestBody), $fetch);
    }
    /**
     * List values under the same custom field
     * @param string $fieldId The Field Brex identifier
     * @param array $queryParameters {
     *     @var array $brex_id[] Field value Brex identifier(s) to filter by
     *     @var array $value_id[] Field value identifier(s) to filter by
     *     @var array $remote_id[] Field value remote identifier(s) to filter by
     *     @var string $cursor The cursor to use for pagination. This is the `next_cursor` value returned from the previous response.
     *     @var int $limit Controls the maximum number of field values returned in the response. It can't be greater than 1000.
     *     @var string $value Field value's value to filter by
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldValuesBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldValuesUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldValuesForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\ListFieldValuesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Fields\Model\PageFieldValue : \Psr\Http\Message\ResponseInterface)
     */
    public function listFieldValues(string $fieldId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Fields\Endpoint\ListFieldValues($fieldId, $queryParameters), $fetch);
    }
    /**
     * Create custom field values (up to 1000 values at once) for a specific field
     * @param string $fieldId The Field Brex identifier
     * @param \NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueListBody $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key Idempotency key for this request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\CreateFieldValuesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueListResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function createFieldValues(string $fieldId, \NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueListBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Fields\Endpoint\CreateFieldValues($fieldId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Update custom field values (up to 1000 values at once) for a specific field
     * @param string $fieldId The Field Brex identifier
     * @param \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueListBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldValuesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueListResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function updateFieldValues(string $fieldId, \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueListBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Fields\Endpoint\UpdateFieldValues($fieldId, $requestBody), $fetch);
    }
    /**
     * Get a field value by field ID and field value ID
     * @param string $fieldId The Field Brex identifier
     * @param string $brexId The field value ID (`brex_id`) to retrieve.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldValueByIdInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Fields\Model\FieldValue : \Psr\Http\Message\ResponseInterface)
     */
    public function getFieldValueById(string $fieldId, string $brexId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Fields\Endpoint\GetFieldValueById($fieldId, $brexId), $fetch);
    }
    /**
     * Delete a custom field by Brex ID
     * @param string $id The Brex identifier of the field to delete
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\DeleteFieldInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteField(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Fields\Endpoint\DeleteField($id), $fetch);
    }
    /**
     * Get a custom field by Brex ID
     * @param string $id The Brex identifier of the field to retrieve
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\GetFieldByIdInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Fields\Model\Field : \Psr\Http\Message\ResponseInterface)
     */
    public function getFieldById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Fields\Endpoint\GetFieldById($id), $fetch);
    }
    /**
     * Update a field by ID
     * @param string $id The Brex identifier of the field to update
     * @param \NxSys\Library\Clients\Brex\API\Fields\Model\FieldUpdateBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldNotFoundException
     * @throws \NxSys\Library\Clients\Brex\API\Fields\Exception\UpdateFieldInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Fields\Model\Field : \Psr\Http\Message\ResponseInterface)
     */
    public function updateField(string $id, \NxSys\Library\Clients\Brex\API\Fields\Model\FieldUpdateBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Fields\Endpoint\UpdateField($id, $requestBody), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \NxSys\Library\Clients\Brex\API\Fields\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}