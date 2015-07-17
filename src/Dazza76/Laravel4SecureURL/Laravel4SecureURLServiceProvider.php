<?php namespace Dazza76\Laravel4SecureURL;

use \Illuminate\Routing\RoutingServiceProvider;
class Laravel4SecureURLServiceProvider extends RoutingServiceProvider {

 /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['SecureUrlGenerator'] = $this->app->share(function($app)
        {
            return new SecureUrlGenerator;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('SecureUrlGenerator');
    }


   public function boot()
    {
	$this->package('dazza76/Laravel4Secureurl');
        \App::bind('url', function()
        {
            return new SecureUrlGenerator(
                \App::make('router')->getRoutes(),
                \App::make('request')
            );
        });

        parent::boot();
    }





}
