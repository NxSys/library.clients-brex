<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Expenses\Endpoint;

class GetExpense extends \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client\EndpointTrait;
    protected $expense_id;

    /**
     * Get an expense by its ID.
     *
     * @param array $queryParameters {
     *
     *     @var array $expand[]
     * }
     */
    public function __construct(string $expenseId, array $queryParameters = [])
    {
        $this->expense_id = $expenseId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{expense_id}'], [$this->expense_id], '/v1/expenses/card/{expense_id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['expand']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('expand', ['array', 'null']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpense|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\GetExpenseBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\GetExpenseUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\GetExpenseForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\GetExpenseNotFoundException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\\Library\\Clients\\Brex\\API\\Expenses\\Model\\ExpandableExpense', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\GetExpenseBadRequestException();
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\GetExpenseUnauthorizedException();
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\GetExpenseForbiddenException();
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\GetExpenseNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['oAuth2ClientCredentials', 'OAuth2'];
    }
}
