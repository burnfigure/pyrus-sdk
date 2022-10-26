<?php

namespace Pyrus\Entities;

use Pyrus\Abstracts\Entity;
use Pyrus\Interfaces\EntityInterface;
use Pyrus\Library\Pyrus;
use Pyrus\Traits\TasksTrait;

class Tasks extends Entity implements EntityInterface
{
    use TasksTrait;

    public function __construct(private Pyrus $pyrus){}
}