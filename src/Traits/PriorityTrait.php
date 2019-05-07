<?php

namespace Dwo\Traits;

trait PriorityTrait
{
    /** @var int|null */
    protected $priority;

    /**
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }

    /**
     * @param int|null
     */
    public function setPriority(?int $priority): void
    {
        $this->priority = $priority;
    }
}
