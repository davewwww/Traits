<?php

namespace Dwo\Traits;

trait ExpireAtTrait
{
    /** @var \DateTimeInterface|null */
    protected $expireAt;

    /**
     * @return \DateTimeInterface|null
     */
    public function getExpireAt(): ?\DateTimeInterface
    {
        return $this->expireAt;
    }

    /**
     * @param \DateTimeInterface $expireAt
     */
    public function setExpireAt(?\DateTimeInterface $expireAt): void
    {
        $this->expireAt = $expireAt;
    }
}
