<?php

namespace App\Repositories;

interface RoleRepositoryInterface
{
    public function all();
    public function getById($id);
    public function syncPermissions($id, array $permissions);
}
