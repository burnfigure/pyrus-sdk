<?php
namespace Pyrus;

use Pyrus\Entities\Catalogs;
use Pyrus\Entities\Comments;
use Pyrus\Entities\Files;
use Pyrus\Entities\Members;
use Pyrus\Entities\Tasks;

class Client
{
    private Tasks $tasks;
    private Comments $comments;
    private Files $files;
    private Catalogs $catalogs;
    private Members $members;

    public function __get(string $name)
    {
        return $this->$name;
    }

    public function __set(string $name, $value): void
    {
        $this->$name = $value;
    }
}