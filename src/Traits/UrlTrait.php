<?php

namespace Dwo\Traits;

trait UrlTrait
{
    /** @var string|null */
    protected $url;

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }
}
