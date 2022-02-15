<?php

namespace App\Providers;

use App\Repositories\UserRepository;
use App\ServicesInterface\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind(UserServiceInterface::class,UserRepository::class);

    }

}
