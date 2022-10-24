<?php

namespace Pyrus\Entities;

use Pyrus\Library\Pyrus;

class Tasks
{
    public function __construct(private Pyrus $pyrus){}

    public function getTasks(int $form_id, array $criteria)
    {
        $path = "forms/{$form_id}/register?".http_build_query($criteria);//1145274; //
        return $this->pyrus->get($path);
    }

    public function getTask(int $task_id)
    {
        $path = "tasks/{$task_id}";
        return $this->pyrus->get($path);
    }

    public function createTask($form_id, $fields)
    {
        $path = "tasks";

        return $this->pyrus->post($path, [
            'form_id' => $form_id,
            'fields' => $fields
        ]);
    }
}