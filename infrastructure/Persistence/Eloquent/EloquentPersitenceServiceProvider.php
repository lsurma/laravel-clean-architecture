<?php

namespace Infrastructure\Persistence\Eloquent;

use App\Common\Repositories\UserRepositoryInterface;

use Infrastructure\Persistence\Eloquent\Repositories\UserRepository;

class EloquentPersitenceServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        // Register repositories
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    public function boot()
    {
        // Load migrations
        $this->loadMigrationsFrom([
            __DIR__ . '/Migrations'
        ]);
    }
}
