<?php

namespace Dwo\Traits;

/**
 * Trait StateTrait
 *
 * status == how are you? [good/bad]
 * state == what are you doing? [resting/working]
 *
 * @package Dwo\Traits
 */
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
