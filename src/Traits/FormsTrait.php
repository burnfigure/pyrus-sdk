<?php

namespace Pyrus\Traits;

trait FormsTrait
{
    public function getForm(int $form_id, ?string $callback_class = null): ?array
    {
        $path = "forms/{$form_id}";
        $this->response = $this->pyrus->get($path);
        return $this->getResponse($callback_class);
    }
}