<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class CreateFieldValueListBody extends \ArrayObject
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
     * The list of field values to be created
     *
     * @var list<CreateFieldValueBody>
     */
    protected $items;
    /**
     * The list of field values to be created
     *
     * @return list<CreateFieldValueBody>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * The list of field values to be created
     *
     * @param list<CreateFieldValueBody> $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}