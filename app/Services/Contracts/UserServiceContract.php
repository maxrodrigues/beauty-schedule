<?php

namespace App\Services\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface UserServiceContract
{
    public function getAllUsers(): array;
}
