<?php

namespace Dwo\Traits;

trait AmountTrait
{
    /** @var int|string|null */
    protected $amount;

    /**
     * @return int|string|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int|string|null $amount
     */
    public function setAmount($amount = null): void
    {
        $this->amount = $amount;
    }
}
