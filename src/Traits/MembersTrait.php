<?php

namespace Pyrus\Traits;

trait MembersTrait
{
    public function getMembers(?string $callback_class = null): ?array
    {
        $path = "members";
        $this->response = $this->pyrus->get($path);
        return $this->getResponse($callback_class);
    }
}