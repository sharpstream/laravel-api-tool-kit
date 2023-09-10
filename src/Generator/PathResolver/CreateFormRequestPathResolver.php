<?php

namespace Essa\APIToolKit\Generator\PathResolver;

use Essa\APIToolKit\Generator\Contracts\HasClassAndNamespace;

class CreateFormRequestPathResolver extends PathResolver implements HasClassAndNamespace
{
    public function folderPath(): string
    {
        return app_path("Http/Requests/{$this->model}");
    }

    public function fileName(): string
    {
        return "Create{$this->model}Request.php";
    }

    public function getNameSpace(): string
    {
        return "App\Http\Requests\\{$this->model}";
    }
}
