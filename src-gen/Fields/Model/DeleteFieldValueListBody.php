<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Model;

class DeleteFieldValueListBody extends \ArrayObject
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
     * @var list<array<string, mixed>>
     */
    protected $items;
    /**
     * @return list<array<string, mixed>>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * @param list<array<string, mixed>> $items
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