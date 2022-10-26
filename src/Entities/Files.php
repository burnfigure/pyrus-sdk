<?php

namespace Pyrus\Entities;

use Pyrus\Abstracts\Entity;
use Pyrus\Interfaces\EntityInterface;
use Pyrus\Library\Pyrus;
use Pyrus\Traits\FilesTrait;

class Files extends Entity implements EntityInterface
{
    use FilesTrait;

    public function __construct(private Pyrus $pyrus){}
}