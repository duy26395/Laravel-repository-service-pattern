<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\TrainsInterface;
use App\Repository\TrainsRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(TrainsInterface::class, TrainsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
