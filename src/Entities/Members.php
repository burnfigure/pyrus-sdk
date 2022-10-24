<?php

namespace Pyrus\Entities;

use Pyrus\Library\Pyrus;

class Members
{
    public function __construct(private Pyrus $pyrus){}

    public function getMembers()
    {
        $path = "members";
        return $this->pyrus->get($path);
    }
}