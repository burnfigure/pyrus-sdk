<?php

namespace Pyrus\Traits;

trait CommentsTrait
{
    public function addComment(int $task_id, array $comment_fields, callable $callback = null): ?array
    {
        $path = "tasks/{$task_id}/comments";
        $this->response = $this->pyrus->post($path, $comment_fields);
        return $this->getResponse($callback);
    }
}