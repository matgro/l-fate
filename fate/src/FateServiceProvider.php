<?php namespace Ydentidad\Fate;

use Illuminate\Support\ServiceProvider;

class FateServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		include __DIR__.'/routes.php';
                $this->app->make('Ydentidad\Fate\FateController');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
