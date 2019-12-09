<?php

namespace App\Repositories;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    private $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function latest()
    {
        return $this->model->latest()->get();
    }

    public function create($request)
    {
        // return $request;
        $user = $this->model->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->roles()->attach($request->roles);

        return $user;
    }

    public function update($request, $id)
    {
        $user = $this->find($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        if ($request->password) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
        }

        $user->roles()->sync($request->roles);

        return $user;
    }

    public function delete($id)
    {
        return $this->find($id)->delete();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
}