<?php

namespace NxSys\Library\Clients\Brex\API\Team;

class Client extends \NxSys\Library\Clients\Brex\API\Team\Runtime\Client\Client
{
    /**
     *
     * Lists all cards by a `user_id`.
     * Only cards with `limit_type = CARD` have `spend_controls`
     *
     * @param array $queryParameters {
     *     @var string $user_id
     *     @var string $cursor
     *     @var int $limit
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\PageCard : \Psr\Http\Message\ResponseInterface)
     */
    public function listCardsByUserId(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\ListCardsByUserId($queryParameters), $fetch);
    }
    /**
     *
     * Creates a new card.
     * The `spend_controls` field is required when `limit_type` = `CARD`.
     * The `mailing_address` field is required for physical cards and is the shipping address used to send the card; it is not the same as the billing and mailing address used for online purchases.
     * The first 2 lines of this address must be under 60 characters long. Each user can only have up to 10 active physical cards.
     *
     * @param \NxSys\Library\Clients\Brex\API\Team\Model\CreateCardRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\Card : \Psr\Http\Message\ResponseInterface)
     */
    public function createCard(\NxSys\Library\Clients\Brex\API\Team\Model\CreateCardRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\CreateCard($requestBody, $headerParameters), $fetch);
    }
    /**
     *
     * Retrieves a card by ID. Only cards with `limit_type = CARD` have `spend_controls`
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\Card : \Psr\Http\Message\ResponseInterface)
     */
    public function getCardById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\GetCardById($id), $fetch);
    }
    /**
     *
     * Update an existing vendor card
     *
     * @param string $id
     * @param \NxSys\Library\Clients\Brex\API\Team\Model\UpdateCardRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\Card : \Psr\Http\Message\ResponseInterface)
     */
    public function updateCard(string $id, \NxSys\Library\Clients\Brex\API\Team\Model\UpdateCardRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\UpdateCard($id, $requestBody, $headerParameters), $fetch);
    }
    /**
     *
     * Locks an existing, unlocked card. And the card owner will receive a notification about it.
     *
     * @param string $id
     * @param \NxSys\Library\Clients\Brex\API\Team\Model\LockCardRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\Card : \Psr\Http\Message\ResponseInterface)
     */
    public function lockCard(string $id, \NxSys\Library\Clients\Brex\API\Team\Model\LockCardRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\LockCard($id, $requestBody, $headerParameters), $fetch);
    }
    /**
     *
     * Retrieves card number, CVV, and expiration date of a card by ID.
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\CardNumberResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function getCardNumber(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\GetCardNumber($id), $fetch);
    }
    /**
     *
     * Creates a secure email to send card number, CVV, and expiration date of a card by ID to the specified email.
     *
     * This endpoint is currently gated. If you would like to request access, please reach out to
     * developer-access@brex.com
     *
     * @param string $id
     * @param \NxSys\Library\Clients\Brex\API\Team\Model\SecureEmailForCardDetailsRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function emailCardNumber(string $id, \NxSys\Library\Clients\Brex\API\Team\Model\SecureEmailForCardDetailsRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\EmailCardNumber($id, $requestBody, $headerParameters), $fetch);
    }
    /**
     *
     * Terminates an existing card. The card owner will receive a notification about it.
     *
     * @param string $id
     * @param \NxSys\Library\Clients\Brex\API\Team\Model\TerminateCardRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\Card : \Psr\Http\Message\ResponseInterface)
     */
    public function terminateCard(string $id, \NxSys\Library\Clients\Brex\API\Team\Model\TerminateCardRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\TerminateCard($id, $requestBody, $headerParameters), $fetch);
    }
    /**
     *
     * Unlocks an existing card.
     *
     * @param string $id
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\Card : \Psr\Http\Message\ResponseInterface)
     */
    public function unlockCard(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\UnlockCard($id, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetCompanyBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetCompanyUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetCompanyForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\CompanyResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function getCompany(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\GetCompany(), $fetch);
    }
    /**
     *
     * This endpoint lists all departments.
     *
     * @param array $queryParameters {
     *     @var string $cursor
     *     @var int $limit
     *     @var string $name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListDepartmentsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListDepartmentsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListDepartmentsForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\PageDepartmentResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function listDepartments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\ListDepartments($queryParameters), $fetch);
    }
    /**
     *
     * This endpoint creates a new department
     *
     * @param \NxSys\Library\Clients\Brex\API\Team\Model\CreateDepartmentRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\CreateDepartmentBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\CreateDepartmentUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\CreateDepartmentForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\DepartmentResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function createDepartment(\NxSys\Library\Clients\Brex\API\Team\Model\CreateDepartmentRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\CreateDepartment($requestBody, $headerParameters), $fetch);
    }
    /**
     *
     * This endpoint gets a department by ID.
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetDepartmentByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetDepartmentByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetDepartmentByIdForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\DepartmentResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function getDepartmentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\GetDepartmentById($id), $fetch);
    }
    /**
     *
     * This endpoint lists all locations.
     *
     * @param array $queryParameters {
     *     @var string $cursor
     *     @var int $limit
     *     @var string $name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListLocationsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListLocationsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListLocationsForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\PageLocationResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function listLocations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\ListLocations($queryParameters), $fetch);
    }
    /**
     *
     * This endpoint creates a new location.
     *
     * @param \NxSys\Library\Clients\Brex\API\Team\Model\CreateLocationRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\CreateLocationBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\CreateLocationUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\CreateLocationForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\LocationResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function createLocation(\NxSys\Library\Clients\Brex\API\Team\Model\CreateLocationRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\CreateLocation($requestBody, $headerParameters), $fetch);
    }
    /**
     *
     * This endpoint gets a location by ID.
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetLocationByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetLocationByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetLocationByIdForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\LocationResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function getLocationById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\GetLocationById($id), $fetch);
    }
    /**
     *
     * This endpoint lists all users. To find a user id by email, you can filter using the `email` query parameter.
     *
     * @param array $queryParameters {
     *     @var string $cursor
     *     @var int $limit
     *     @var string $email
     *     @var array $expand[]
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListUsersBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListUsersUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\ListUsersForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\PageUserResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function listUsers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\ListUsers($queryParameters), $fetch);
    }
    /**
     *
     * This endpoint invites a new user as an employee.
     * To update user's role, check out [this article](https://support.brex.com/how-do-i-change-another-user-s-role/).
     *
     * @param \NxSys\Library\Clients\Brex\API\Team\Model\CreateUserRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\CreateUserBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\CreateUserUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\CreateUserForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\UserResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function createUser(\NxSys\Library\Clients\Brex\API\Team\Model\CreateUserRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\CreateUser($requestBody, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetMeBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetMeUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetMeForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\UserResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function getMe(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\GetMe(), $fetch);
    }
    /**
     *
     * This endpoint gets a user by ID.
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetUserByIdBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetUserByIdUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\GetUserByIdForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\UserResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function getUserById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\GetUserById($id), $fetch);
    }
    /**
     *
     * This endpoint updates a user. Any parameters not provided will be left unchanged.
     *
     * @param string $id
     * @param \NxSys\Library\Clients\Brex\API\Team\Model\UpdateUserRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\UpdateUserBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\UpdateUserUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Team\Exception\UpdateUserForbiddenException
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\UserResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function updateUser(string $id, \NxSys\Library\Clients\Brex\API\Team\Model\UpdateUserRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\UpdateUser($id, $requestBody, $headerParameters), $fetch);
    }
    /**
     *
     * This endpoint gets the monthly limit for the user including the monthly available limit.
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function getUserLimit(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\GetUserLimit($id), $fetch);
    }
    /**
     *
     * This endpoint sets the monthly limit for a user.
     * The limit amount must be non-negative.
     * To unset the monthly limit of the user, just set `monthly_limit` to null.
     *
     * @param string $id
     * @param \NxSys\Library\Clients\Brex\API\Team\Model\SetUserLimitRequest $requestBody
     * @param array $headerParameters {
     *     @var string $Idempotency-Key
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function setUserLimit(string $id, \NxSys\Library\Clients\Brex\API\Team\Model\SetUserLimitRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \NxSys\Library\Clients\Brex\API\Team\Endpoint\SetUserLimit($id, $requestBody, $headerParameters), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \NxSys\Library\Clients\Brex\API\Team\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}