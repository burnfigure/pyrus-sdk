<?php

namespace Pyrus\Interfaces;

interface EntityInterface
{
    public function getResponse(callable $callback_class = null): ?array;
}