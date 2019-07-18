<?php

namespace Dwo\Traits;

trait VersionTrait
{
    /** @var string|null */
    protected $version;

    /**
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param string|null $version
     */
    public function setVersion(?string $version): void
    {
        $this->version = $version;
    }
}
