<?php

namespace App\Repositories\Eloquent;

use Spatie\Permission\Models\Role;
use App\Repositories\RoleRepositoryInterface;

class RoleRepository implements RoleRepositoryInterface
{
    private $model;

    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->with('users')->get();
    }

    public function getById($id)
    {
        return $this->model->with('permissions')->findOrFail($id);
    }

    public function syncPermissions($id, array $permissions)
    {
        $role = $this->model->findOrFail($id);

        $role->syncPermissions($permissions);
    }
}
