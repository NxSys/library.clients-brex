<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Budgets\Endpoint;

class ListBudgets extends \NxSys\Library\Clients\Brex\API\Budgets\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Budgets\Runtime\Client\Endpoint
{
    use \NxSys\Library\Clients\Brex\API\Budgets\Runtime\Client\EndpointTrait;

    /**
    Lists Budgets belonging to this account

     *
     * @param array $queryParameters {
     *
     *     @var string $cursor
     *     @var int $limit
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/v1/budgets';
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
        $optionsResolver->setDefined(['cursor', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('cursor', ['string', 'null']);
        $optionsResolver->addAllowedTypes('limit', ['int', 'null']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \NxSys\Library\Clients\Brex\API\Budgets\Model\PageBudget|null
     *
     * @throws \NxSys\Library\Clients\Brex\API\Budgets\Exception\ListBudgetsBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Budgets\Exception\ListBudgetsUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Budgets\Exception\ListBudgetsForbiddenException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Model\\PageBudget', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Budgets\Exception\ListBudgetsBadRequestException();
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Budgets\Exception\ListBudgetsUnauthorizedException();
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Budgets\Exception\ListBudgetsForbiddenException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}