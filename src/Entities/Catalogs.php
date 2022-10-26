<?php

namespace Pyrus\Entities;

use Pyrus\Abstracts\Entity;
use Pyrus\Interfaces\EntityInterface;
use Pyrus\Library\Pyrus;
use Pyrus\Traits\CatalogsTrait;

class Catalogs extends Entity implements EntityInterface
{
    use CatalogsTrait;

    public function __construct(private Pyrus $pyrus){}
}