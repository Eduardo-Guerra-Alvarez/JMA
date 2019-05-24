<?php

namespace App\Providers;

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
        'App\Obra' => 'App\Policies\ObrasPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /**
         * Define gate llamado 'ediatar-obra'
         * 
         * La expresión solo será verdadera si el usuario es quien recibe el documento
         * 'editar-documento' Nombre del Gate
         * $user Es la instancia del usuario logeado
         * $obra Es la instancia de la obra
         * @return boolean
         */
        Gate::define('editar-obra', function($user, $obra){
            //return $user->id == $obra->user_id;
            return $user->rol == 'admin';
        });
    }
}
