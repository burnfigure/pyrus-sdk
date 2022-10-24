<?php

namespace Pyrus\Entities;

use Pyrus\Library\Pyrus;

class Comments
{
    public function __construct(private Pyrus $pyrus){}

    public function addComment(int $task_id, array $comment_fields)
    {
        $path = "tasks/{$task_id}/comments";
        return $this->pyrus->post($path, $comment_fields);
    }
}