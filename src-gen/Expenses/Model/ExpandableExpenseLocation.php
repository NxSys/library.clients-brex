<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Expenses\Model;

class ExpandableExpenseLocation extends \ArrayObject
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
     * The unique identifier for the location.
     *
     * @var string
     */
    protected $id;
    /**
     * The name of the location.
     *
     * @var string
     */
    protected $name;

    /**
     * The unique identifier for the location.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The unique identifier for the location.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The name of the location.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the location.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
