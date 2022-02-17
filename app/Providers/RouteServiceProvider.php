<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    // protected $locationNamespace = 'App\Http\Controllers\Locations';
    // protected $clientNamespace = 'App\Http\Controllers\Clients';


    public const HOME = '/dashboard';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';
/**
 * define the route for the aplication
 *
 */
    public function map()
    {
    //     $this->mapApiRoutes();

    //     $this->mapWebRoutes();

        // $this->mapPassengerRoutes();

    //     $this->mapClientRoutes();

        // $this->mapLocationRoutes();


    }
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));




        });



    }
/** this is for route clients ans location  */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
        ->namespace($this->namespace)
        ->group(base_path('routes/web.php'));
    }
    protected function mapPassengerRoutes()
    {
        Route::namespace($this->namespace)
        ->group(base_path('routes/passenger.php'));

    }
    // protected function mapLocationRoutes()
    // {
    //     Route::prefix('Location')

    //         ->namespace($this->locationNamespace)
    //         ->group(base_path('routes/Location/Location.php'));
    // }

    // protected function mapClientRoutes()
    // {
    //     Route::prefix('Client')
    //         ->middleware('auth:api')
    //         ->namespace($this->clientNamespace)
    //         ->group(base_path('routes/Clients/Client.php'));
    // }
    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
