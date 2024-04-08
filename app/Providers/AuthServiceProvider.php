<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('student', function(){
            if(session()->get('Roles') === 'Student'){
                return true;
            }
            return false;
        });

        Gate::define('tutor', function(){
            if(session()->get('Roles') === 'Tutor'){
                return true;
            }
            return false;
        });
    }
}
