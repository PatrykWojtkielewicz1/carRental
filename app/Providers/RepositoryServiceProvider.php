<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(){
        $this->app->bind(
            'App\Interfaces\UserInterface',
            'App\Repositories\UserRepository'
        );
        $this->app->bind(
            'App\Interfaces\RentInterface',
            'App\Repositories\RentRepository'
        );
        $this->app->bind(
            'App\Interfaces\AuthInterface',
            'App\Repositories\AuthRepository'
        );
        $this->app->bind(
            'App\Interfaces\RentedInterface',
            'App\Repositories\RentedRepository'
        );
    }
}