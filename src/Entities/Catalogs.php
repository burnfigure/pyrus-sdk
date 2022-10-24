<?php

namespace Pyrus\Entities;

use Pyrus\Library\Pyrus;

class Catalogs
{
    public function __construct(private Pyrus $pyrus){}

    public function getCatalog(int $catalog_id)
    {
        $path = "catalogs/{$catalog_id}";
        return $this->pyrus->get($path);
    }

}