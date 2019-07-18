<?php

namespace Dwo\Traits;

/**
 * Trait StatusTrait
 *
 * status == how are you? [good/bad]
 * state == what are you doing? [resting/working]
 *
 * @package Dwo\Traits
 */
trait StatusTrait
{
    /** @var string|null */
    protected $status;

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }
}
