<?php

namespace Dwo\Traits;

trait NewTrait
{
    /** @var bool */
    protected $new = false;

    /**
     * @return bool
     */
    public function isNew(): bool
    {
        return $this->new;
    }
}
