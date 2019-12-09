<?php

namespace App\Repositories;

use App\Entities\Role;
use App\Repositories\Contracts\RoleRepositoryInterface;

class RoleRepository implements RoleRepositoryInterface
{
    private $model;

    public function __construct(Role $role)
    {
        $this->model = $role;
    }

    public function latest()
    {
        return $this->model->latest()->get();
    }

    public function create($request)
    {
        return $this->model->create($request->all());
    }

    public function update($request, $id)
    {
        return $this->find($id)->update($request->all());
    }

    public function delete($id)
    {
        return $this->find($id)->delete();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function pluck()
    {
        return $this->model->pluck('name', 'id');
    }
}