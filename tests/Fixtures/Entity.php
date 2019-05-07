<?php

namespace Dwo\Traits\Test\Fixtures;

use Dwo\Traits\ActiveTrait;
use Dwo\Traits\AmountTrait;
use Dwo\Traits\CreatedAtTrait;
use Dwo\Traits\DataTrait;
use Dwo\Traits\DeletedAtTrait;
use Dwo\Traits\IdTrait;
use Dwo\Traits\NameTrait;
use Dwo\Traits\StateTrait;
use Dwo\Traits\TypeTrait;
use Dwo\Traits\UpdatedAtTrait;
use Dwo\Traits\ValueTrait;

class Entity
{
    use ActiveTrait, AmountTrait, CreatedAtTrait, DataTrait, DeletedAtTrait,
        IdTrait, NameTrait, StateTrait, TypeTrait, UpdatedAtTrait, ValueTrait;
}