<?php

namespace Pyrus\Entities;

use Pyrus\Abstracts\Entity;
use Pyrus\Interfaces\EntityInterface;
use Pyrus\Library\Pyrus;
use Pyrus\Traits\CommentsTrait;

class Comments extends Entity implements EntityInterface
{
    use CommentsTrait;

    public function __construct(private Pyrus $pyrus){}

}