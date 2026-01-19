<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Model;

class ProductApplication extends \ArrayObject
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
    protected $cash;
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
    public function getCash(): string
    {
        return $this->cash;
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
    * @param string $cash
    *
    * @return self
    */
    public function setCash(string $cash): self
    {
        $this->initialized['cash'] = true;
        $this->cash = $cash;
        return $this;
    }
}