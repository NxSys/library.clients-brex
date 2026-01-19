<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class FailedExportResultFailure extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Human-readable explanation of the failure
     *
     * @var string
     */
    protected $errorMessage;
    /**
     * Human-readable explanation of the failure
     *
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
    /**
     * Human-readable explanation of the failure
     *
     * @param string $errorMessage
     *
     * @return self
     */
    public function setErrorMessage(string $errorMessage): self
    {
        $this->initialized['errorMessage'] = true;
        $this->errorMessage = $errorMessage;
        return $this;
    }
}