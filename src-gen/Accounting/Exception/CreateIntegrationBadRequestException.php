<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Exception;

class CreateIntegrationBadRequestException extends BadRequestException
{
    /**
     * @var \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse
     */
    private $accountingErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse $accountingErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad request');
        $this->accountingErrorResponse = $accountingErrorResponse;
        $this->response = $response;
    }
    public function getAccountingErrorResponse(): \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse
    {
        return $this->accountingErrorResponse;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}