<?php

namespace App\Common\Repositories;

interface UserRepositoryInterface
{
    public function find($id): ?\Domain\Models\User;
}