<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use UserRepository;
use UserServiceInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind(UserServiceInterface::class,UserRepository::class);
    }

}
