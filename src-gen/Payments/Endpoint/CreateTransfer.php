<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Endpoint;

class CreateTransfer extends \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\BaseEndpoint implements \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\Endpoint
{
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
     */
    public function __construct(\NxSys\Library\Clients\Brex\API\Payments\Model\CreateTransferRequest $requestBody, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \NxSys\Library\Clients\Brex\API\Payments\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v1/transfers';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \NxSys\Library\Clients\Brex\API\Payments\Model\CreateTransferRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Idempotency-Key']);
        $optionsResolver->setRequired(['Idempotency-Key']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Idempotency-Key', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\NxSys\Library\Clients\Brex\API\Payments\Model\Transfer
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'NxSys\Library\Clients\Brex\API\Payments\Model\Transfer', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['OAuth2'];
    }
}