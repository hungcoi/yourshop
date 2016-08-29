<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;
use App\Models\Category;
use App\Repositories\Eloquents\CategoryRepository;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('layout', 'layouts.app');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind(CategoryRepositoryInterface::class, CategoryRepository::class);
    }
}