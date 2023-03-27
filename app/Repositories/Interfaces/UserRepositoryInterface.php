<?php

namespace App\Repositories\interfaces;

use App\Models\User;

interface UserRepositoryInterface{
    public function all();
    public function allPaginated(int $perPage = 0);
    public function getById(int $id);
}