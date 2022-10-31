<?php

namespace Pyrus\Traits;


trait TasksTrait
{
    public function getTasks(int $form_id, array $criteria, callable $callback = null): array
    {
        $path = "forms/{$form_id}/register?".http_build_query($criteria);
        $this->response =  $this->pyrus->get($path);

        return $this->getResponse($callback);
    }

    public function getTask(int $task_id, callable $callback = null): array
    {
        $path = "tasks/{$task_id}";
        $this->response = $this->pyrus->get($path);

        return $this->getResponse($callback);
    }

    public function createTask($form_id, $fields, callable $callback = null): array
    {
        $path = "tasks";

        $this->response = $this->pyrus->post($path, [
            'form_id' => $form_id,
            'fields' => $fields
        ]);

        return $this->getResponse($callback);
    }
}