<?php

namespace Pyrus\Entities;

use Pyrus\Library\Pyrus;

class Files
{
    public function __construct(private Pyrus $pyrus){}

    public function getFile(int $file_id)
    {
        $path = "files/download/{$file_id}";
        return $this->pyrus->get($path, false);
    }

    public function uploadFile(string $file_path)
    {
        $path = "files/upload";
        return $this->pyrus->postFile($path, $file_path);
    }
}