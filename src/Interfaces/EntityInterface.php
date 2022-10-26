<?php

namespace Pyrus\Interfaces;

interface EntityInterface
{
    public function getResponse(?string $callback_class = null): ?array;
}