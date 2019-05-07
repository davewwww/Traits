<?php

namespace Dwo\Traits;

trait StateTrait
{
    /** @var string|null */
    protected $state;

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }
}
