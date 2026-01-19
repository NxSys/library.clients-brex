<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class CreateFieldValueListResponse extends \ArrayObject
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
     * The list of created field values
     *
     * @var list<FieldValue>
     */
    protected $items;
    /**
     * The list of created field values
     *
     * @return list<FieldValue>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * The list of created field values
     *
     * @param list<FieldValue> $items
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