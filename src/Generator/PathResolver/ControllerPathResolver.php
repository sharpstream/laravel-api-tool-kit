<?php

namespace Essa\APIToolKit\Generator\PathResolver;

use Essa\APIToolKit\Generator\Contracts\HasClassAndNamespace;

class ControllerPathResolver extends PathResolver implements HasClassAndNamespace
{
    public function folderPath(): string
    {
        return app_path('Http/Controllers/API');
    }

    public function fileName(): string
    {
        return "{$this->model}Controller.php";
    }

    public function getNameSpace(): string
    {
        return 'App\Http\Controllers\API';
    }
}
