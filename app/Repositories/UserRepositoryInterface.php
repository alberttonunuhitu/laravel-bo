<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function all();
    public function create(array $attributes);
    public function getById($id);
    public function update($id, array $attributes);
    public function delete($id);
}
