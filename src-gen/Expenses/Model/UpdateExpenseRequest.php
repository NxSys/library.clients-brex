<?php

namespace NxSys\Library\Clients\Brex\API\Expenses\Model;

class UpdateExpenseRequest extends \ArrayObject
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
     * Expense memo.
     *
     * @var string|null
     */
    protected $memo;
    /**
     * Expense memo.
     *
     * @return string|null
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }
    /**
     * Expense memo.
     *
     * @param string|null $memo
     *
     * @return self
     */
    public function setMemo(?string $memo): self
    {
        $this->initialized['memo'] = true;
        $this->memo = $memo;
        return $this;
    }
}