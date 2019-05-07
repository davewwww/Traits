<?php

namespace Dwo\Traits;

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
