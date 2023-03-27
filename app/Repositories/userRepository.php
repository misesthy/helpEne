<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface{
    public function all(){
        return User::all();
    }
    public function allPaginated($perPage = 10){
        return User::paginate($perPage);
    }

    public function getById($id){
        return User::find($id);
    }
}