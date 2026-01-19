<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class UpdateFieldValueListResponse extends \ArrayObject
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
     * The list of updated field values
     *
     * @var list<FieldValue>
     */
    protected $items;
    /**
     * The list of updated field values
     *
     * @return list<FieldValue>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * The list of updated field values
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