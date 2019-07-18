<?php

interface IdInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @param int|string|null $id
     */
    public function setId($id = null): void;
}