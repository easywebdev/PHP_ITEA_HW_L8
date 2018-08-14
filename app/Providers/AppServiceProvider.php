<?php

namespace App\Providers;

use App\Modules\User\Contracts\UserRepoitoryInterface;
use App\Modules\User\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(UserRepoitoryInterface::class, UserRepository::class);
    }
}
