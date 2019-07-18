<?php

namespace Dwo\Traits;

trait IpTrait
{
    /** @var string|null */
    protected $ip;

    /**
     * @return string|null
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * @param string|null $ip
     */
    public function setIp(?string $ip): void
    {
        $this->ip = $ip;
    }
}
