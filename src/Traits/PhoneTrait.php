<?php

namespace Dwo\Traits;

trait PhoneTrait
{
    /** @var string|null */
    protected $phone;

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }
}
