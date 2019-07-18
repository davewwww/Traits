<?php

namespace Dwo\Traits;

trait IpPortTrait
{
    use IpTrait;

    /** @var string|null */
    protected $port;

    /**
     * @return string|null
     */
    public function getPort(): ?string
    {
        return $this->port;
    }

    /**
     * @param string|null $port
     */
    public function setPort(?string $port): void
    {
        $this->port = $port;
    }
}
