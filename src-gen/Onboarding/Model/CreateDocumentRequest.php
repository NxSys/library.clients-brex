<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class CreateDocumentRequest extends \ArrayObject
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
     * Type of document being submitted. Allowable types:
     * - ARTICLES_OF_INCORPORATION
     * - IRS_EIN_CONFIRMATION (IRS CP 575 or 147C form)
     * - IRS_EIN_APPLICATION (IRS SS4 form)
     * - CERTIFICATE_GOOD_STANDING
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * Type of document being submitted. Allowable types:
     * - ARTICLES_OF_INCORPORATION
     * - IRS_EIN_CONFIRMATION (IRS CP 575 or 147C form)
     * - IRS_EIN_APPLICATION (IRS SS4 form)
     * - CERTIFICATE_GOOD_STANDING
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * Type of document being submitted. Allowable types:
    - ARTICLES_OF_INCORPORATION
    - IRS_EIN_CONFIRMATION (IRS CP 575 or 147C form)
    - IRS_EIN_APPLICATION (IRS SS4 form)
    - CERTIFICATE_GOOD_STANDING
    
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}