<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $attributes)
    {
        $user = $this->model->create([
            'name' => $attributes['name'],
            'username' => $attributes['username'],
            'email' => $attributes['email'],
            'password' => Hash::make($attributes['password'])
        ]);

        $user->syncRoles($attributes['role']);
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($id, array $attributes)
    {
        $user = $this->model->findOrFail($id);

        $user->update([
            'name' => $attributes['name'],
            'email' => $attributes['email']
        ]);

        $user->syncRoles($attributes['role']);
    }

    public function delete($id)
    {
        $user = $this->model->findOrFail($id);

        $user->delete();
    }
}
