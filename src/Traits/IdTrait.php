<?php

namespace Dwo\Traits;

trait IdTrait
{
    /** @var int|string|null */
    protected $id;

    /**
     * @return int|string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|string|null $id
     */
    public function setId($id = null): void
    {
        $this->id = $id;
    }
}
