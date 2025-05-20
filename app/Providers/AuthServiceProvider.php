<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
	protected $policies = [
		// 'App\Models\Model' => 'App\Policies\ModelPolicy',
		'App\Models\User' => 'App\Policies\AdminPolicy', // Registra la política para el modelo User
	];
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return $user->rol === 'administrador';
        });
    }
}
