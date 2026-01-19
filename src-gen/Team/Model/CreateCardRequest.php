<?php

namespace NxSys\Library\Clients\Brex\API\Team\Model;

class CreateCardRequest extends \ArrayObject
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
     * @var array<string, mixed>
     */
    protected $owner;
    /**
     * @var string
     */
    protected $cardName;
    /**
     * @var string
     */
    protected $cardType;
    /**
     * 
     * `limit_type = CARD` for vendor cards. Vendor cards must have a `card_type` of `VIRTUAL`
     * and do not rely on the user specific limit.
     * 
     * For corporate cards, `limit_type = USER`.
     * 
     * Learn more about different card types [here](https://support.brex.com/what-are-the-different-types-of-cards-i-can-get/).
     * 
     *
     * @var string
     */
    protected $limitType;
    /**
     * @var CreateCardRequestSpendControls
     */
    protected $spendControls;
    /**
     * @var CreateCardRequestMailingAddress
     */
    protected $mailingAddress;
    /**
     * 
     * Set of key value pairs associated with this object. Please do not store any personally identifiable or sensitive information here.
     * Limitations: maximum of 50 keys, keys cannot exceed 40 characters, values cannot exceed 500 characters.
     * 
     *
     * @var array<string, string>|null
     */
    protected $metadata;
    /**
     * @var CreateCardRequestCardAttributePreferences
     */
    protected $cardAttributePreferences;
    /**
     * @return array<string, mixed>
     */
    public function getOwner(): iterable
    {
        return $this->owner;
    }
    /**
     * @param array<string, mixed> $owner
     *
     * @return self
     */
    public function setOwner(iterable $owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * @return string
     */
    public function getCardName(): string
    {
        return $this->cardName;
    }
    /**
     * @param string $cardName
     *
     * @return self
     */
    public function setCardName(string $cardName): self
    {
        $this->initialized['cardName'] = true;
        $this->cardName = $cardName;
        return $this;
    }
    /**
     * @return string
     */
    public function getCardType(): string
    {
        return $this->cardType;
    }
    /**
     * @param string $cardType
     *
     * @return self
     */
    public function setCardType(string $cardType): self
    {
        $this->initialized['cardType'] = true;
        $this->cardType = $cardType;
        return $this;
    }
    /**
     * 
     * `limit_type = CARD` for vendor cards. Vendor cards must have a `card_type` of `VIRTUAL`
     * and do not rely on the user specific limit.
     * 
     * For corporate cards, `limit_type = USER`.
     * 
     * Learn more about different card types [here](https://support.brex.com/what-are-the-different-types-of-cards-i-can-get/).
     * 
     *
     * @return string
     */
    public function getLimitType(): string
    {
        return $this->limitType;
    }
    /**
    * 
    `limit_type = CARD` for vendor cards. Vendor cards must have a `card_type` of `VIRTUAL` 
    and do not rely on the user specific limit. 
    
    For corporate cards, `limit_type = USER`.
    
    Learn more about different card types [here](https://support.brex.com/what-are-the-different-types-of-cards-i-can-get/).
    
    *
    * @param string $limitType
    *
    * @return self
    */
    public function setLimitType(string $limitType): self
    {
        $this->initialized['limitType'] = true;
        $this->limitType = $limitType;
        return $this;
    }
    /**
     * @return CreateCardRequestSpendControls
     */
    public function getSpendControls(): CreateCardRequestSpendControls
    {
        return $this->spendControls;
    }
    /**
     * @param CreateCardRequestSpendControls $spendControls
     *
     * @return self
     */
    public function setSpendControls(CreateCardRequestSpendControls $spendControls): self
    {
        $this->initialized['spendControls'] = true;
        $this->spendControls = $spendControls;
        return $this;
    }
    /**
     * @return CreateCardRequestMailingAddress
     */
    public function getMailingAddress(): CreateCardRequestMailingAddress
    {
        return $this->mailingAddress;
    }
    /**
     * @param CreateCardRequestMailingAddress $mailingAddress
     *
     * @return self
     */
    public function setMailingAddress(CreateCardRequestMailingAddress $mailingAddress): self
    {
        $this->initialized['mailingAddress'] = true;
        $this->mailingAddress = $mailingAddress;
        return $this;
    }
    /**
     * 
     * Set of key value pairs associated with this object. Please do not store any personally identifiable or sensitive information here.
     * Limitations: maximum of 50 keys, keys cannot exceed 40 characters, values cannot exceed 500 characters.
     * 
     *
     * @return array<string, string>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
    * 
    Set of key value pairs associated with this object. Please do not store any personally identifiable or sensitive information here.
    Limitations: maximum of 50 keys, keys cannot exceed 40 characters, values cannot exceed 500 characters. 
    
    *
    * @param array<string, string>|null $metadata
    *
    * @return self
    */
    public function setMetadata(?iterable $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * @return CreateCardRequestCardAttributePreferences
     */
    public function getCardAttributePreferences(): CreateCardRequestCardAttributePreferences
    {
        return $this->cardAttributePreferences;
    }
    /**
     * @param CreateCardRequestCardAttributePreferences $cardAttributePreferences
     *
     * @return self
     */
    public function setCardAttributePreferences(CreateCardRequestCardAttributePreferences $cardAttributePreferences): self
    {
        $this->initialized['cardAttributePreferences'] = true;
        $this->cardAttributePreferences = $cardAttributePreferences;
        return $this;
    }
}