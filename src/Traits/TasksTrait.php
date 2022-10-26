<?php

namespace Pyrus\Traits;

use Pyrus\Interfaces\CallbackInterface;

trait TasksTrait
{
    public function getTasks(int $form_id, array $criteria, ?string $callback_class = null): array
    {
        $path = "forms/{$form_id}/register?".http_build_query($criteria);
        $this->response =  $this->pyrus->get($path);

        return $this->getResponse($callback_class);
    }

    public function getTask(int $task_id, ?string $callback_class = null): array
    {
        $path = "tasks/{$task_id}";
        $this->response = $this->pyrus->get($path);

        return $this->getResponse($callback_class);
    }

    public function createTask($form_id, $fields, ?string $callback_class = null): array
    {
        $path = "tasks";

        $this->response = $this->pyrus->post($path, [
            'form_id' => $form_id,
            'fields' => $fields
        ]);

        return $this->getResponse($callback_class);
    }
}