<?php

namespace Pyrus\Entities;

use Pyrus\Abstracts\Entity;
use Pyrus\Interfaces\EntityInterface;
use Pyrus\Library\Pyrus;
use Pyrus\Traits\FormsTrait;

class Forms extends Entity implements EntityInterface
{
    use FormsTrait;

    public function __construct(private Pyrus $pyrus){}
}