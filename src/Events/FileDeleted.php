<?php

namespace Sumvo\LaravelAdmin\Events;

class FileDeleted
{
    public $path;

    public function __construct($path)
    {
        $this->path;
    }
}
