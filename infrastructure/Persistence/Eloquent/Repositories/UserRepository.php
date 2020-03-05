<?php

namespace Infrastructure\Persistence\Eloquent\Repositories;

use App\Common\Repositories\UserRepositoryInterface;
use Domain\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function find($id): ?\Domain\Models\User
    {
        return new User([
            'id' => rand(1, 100),
            'name' => 'name',
            'email' => 'abc@abc.pl'
        ]);
    }
}