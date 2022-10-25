<?php

namespace Pyrus\Entities;

use Pyrus\Library\Pyrus;

class Forms
{
    public function __construct(private Pyrus $pyrus){}

    public function getForm(int $form_id)
    {
        $path = "forms/{$form_id}";
        return $this->pyrus->get($path);
    }
}