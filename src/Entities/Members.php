<?php

namespace Pyrus\Entities;

use Pyrus\Abstracts\Entity;
use Pyrus\Interfaces\EntityInterface;
use Pyrus\Library\Pyrus;
use Pyrus\Traits\MembersTrait;

class Members extends Entity implements EntityInterface
{
    use MembersTrait;

    public function __construct(private Pyrus $pyrus){}
}