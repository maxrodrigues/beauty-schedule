<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryContract;
use App\Services\Contracts\UserServiceContract;
use Illuminate\Database\Eloquent\Collection;

class UserService implements UserServiceContract
{
    protected $user;

    public function __construct(UserRepositoryContract $user)
    {
        $this->user = $user;
    }

    public function getAllUsers(): array
    {
        return $this->user->all()->toArray();
    }
}
