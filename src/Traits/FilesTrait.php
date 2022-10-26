<?php

namespace Pyrus\Traits;

trait FilesTrait
{
    public function getFile(int $file_id, ?string $callback_class = null): ?array
    {
        $path = "files/download/{$file_id}";
        $this->response = $this->pyrus->get($path, false);
        return $this->getResponse($callback_class);
    }

    public function uploadFile(string $file_path, ?string $callback_class = null): ?array
    {
        $path = "files/upload";
        $this->response = $this->pyrus->postFile($path, $file_path);
        return $this->getResponse($callback_class);
    }
}