<?php

namespace App\Repositories\Contracts;

interface UserRepositoryInterface
{
    public function latest();

    public function create($request);

    public function update($request, $id);

    public function delete($id);

    public function find($id);
}