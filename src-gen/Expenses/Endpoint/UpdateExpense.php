<?php

namespace NxSys\Library\Clients\Brex\API\Expenses\Endpoint;

class UpdateExpense extends \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client\Endpoint
{
    protected $expense_id;
    /**
     * Update an expense. Admin and bookkeeper have access to any expense, and regular users can only access their own.
     * @param string $expenseId
     * @param \NxSys\Library\Clients\Brex\API\Expenses\Model\UpdateExpenseRequest $requestBody
     */
    public function __construct(string $expenseId, \NxSys\Library\Clients\Brex\API\Expenses\Model\UpdateExpenseRequest $requestBody)
    {
        $this->expense_id = $expenseId;
        $this->body = $requestBody;
    }
    use \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{expense_id}'], [$this->expense_id], '/v1/expenses/card/{expense_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Expenses\Model\UpdateExpenseRequest) {
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
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\UpdateExpenseBadRequestException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\UpdateExpenseUnauthorizedException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\UpdateExpenseForbiddenException
     * @throws \NxSys\Library\Clients\Brex\API\Expenses\Exception\UpdateExpenseNotFoundException
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Expenses\Model\Expense
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Expenses\Model\Expense', 'json');
        }
        if (400 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\UpdateExpenseBadRequestException($response);
        }
        if (401 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\UpdateExpenseUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\UpdateExpenseForbiddenException($response);
        }
        if (404 === $status) {
            throw new \NxSys\Library\Clients\Brex\API\Expenses\Exception\UpdateExpenseNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuth2ClientCredentials', 'OAuth2'];
    }
}