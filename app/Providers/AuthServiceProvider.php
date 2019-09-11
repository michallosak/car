<?php

namespace App\Providers;

use App\Model\Car\Car;
use App\Model\Car\Rent;
use App\Model\Category;
use App\Policies\CarPolicy;
use App\Policies\CategoryPolice;
use App\Policies\RentPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Car::class => CarPolicy::class,
        Category::class => CategoryPolice::class,
        Rent::class => RentPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
