<?php

namespace Dwo\Traits;

trait DataTrait
{
    /** @var array|null */
    protected $data;

    /**
     * @return array|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param array|null $data
     */
    public function setData(?array $data)
    {
        $this->data = $data;
    }
}
