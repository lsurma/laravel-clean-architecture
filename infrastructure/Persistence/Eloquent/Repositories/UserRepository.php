<?php

namespace Infrastructure\Persistence\Eloquent\Repositories;

use App\Common\Repositories\UserRepositoryInterface;
use Domain\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function find($id): ?\Domain\Models\User
    {
        return User::find($id);
    }
}