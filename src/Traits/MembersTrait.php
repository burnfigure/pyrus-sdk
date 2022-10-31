<?php

namespace Pyrus\Traits;

trait MembersTrait
{
    public function getMembers(callable $callback = null): ?array
    {
        $path = "members";
        $this->response = $this->pyrus->get($path);
        return $this->getResponse($callback);
    }
}