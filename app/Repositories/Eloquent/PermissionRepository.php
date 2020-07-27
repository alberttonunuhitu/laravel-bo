<?php

namespace App\Repositories\Eloquent;

use Spatie\Permission\Models\Permission;
use App\Repositories\PermissionRepositoryInterface;

class PermissionRepository implements PermissionRepositoryInterface
{
    private $model;

    public function __construct(Permission $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }
}
