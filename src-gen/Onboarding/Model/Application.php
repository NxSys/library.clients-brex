<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class Application extends \ArrayObject
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
     * Application status of a product.
     * 
     * `NO_ACCOUNT` - There is no active application, and the product account is not provisioned.
     * 
     * `ACTIVE` - The application is approved, and the product account is provisioned.
     * 
     * `NOT_SUBMITTED` - The application is started but not yet submitted.
     * 
     * `INFORMATION_PENDING` - The application is submitted and additional information is requested.
     * 
     * `MANUAL_REVIEW` - The application is under manual review.
     * 
     * `PROCESSING` - The application is submitted and is under review.
     * 
     * `REJECTED` - The application is rejected.
     * 
     * `CLOSED` - The product account is closed.
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * Application status of a product.
     * 
     * `NO_ACCOUNT` - There is no active application, and the product account is not provisioned.
     * 
     * `ACTIVE` - The application is approved, and the product account is provisioned.
     * 
     * `NOT_SUBMITTED` - The application is started but not yet submitted.
     * 
     * `INFORMATION_PENDING` - The application is submitted and additional information is requested.
     * 
     * `MANUAL_REVIEW` - The application is under manual review.
     * 
     * `PROCESSING` - The application is submitted and is under review.
     * 
     * `REJECTED` - The application is rejected.
     * 
     * `CLOSED` - The product account is closed.
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * Application status of a product.
    
    `NO_ACCOUNT` - There is no active application, and the product account is not provisioned.
    
    `ACTIVE` - The application is approved, and the product account is provisioned.
    
    `NOT_SUBMITTED` - The application is started but not yet submitted.
    
    `INFORMATION_PENDING` - The application is submitted and additional information is requested.
    
    `MANUAL_REVIEW` - The application is under manual review.
    
    `PROCESSING` - The application is submitted and is under review.
    
    `REJECTED` - The application is rejected.
    
    `CLOSED` - The product account is closed.
    
    *
    * @param string $status
    *
    * @return self
    */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}