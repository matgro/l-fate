<?php namespace Ydentidad\Fate;

use Illuminate\Support\ServiceProvider;
use Ydentidad\Fate\Command\FateUpdateCommand as FateUpdateCommand;

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
                $this->loadViewsFrom(__DIR__.'/views', 'fate');
//               $this->publishes([
//                __DIR__.'/views' => base_path('resources/views/ydentidad/fate'),
//            ]);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
             $this->commands('Ydentidad\Fate\Command\FateMakeRepositoryCommand');
             $this->commands('Ydentidad\Fate\Command\FateUpdateCommand');
            $this->registerFateUpdateCommand();
	}
        protected function registerFateUpdateCommand()
        {
            // Make repository command.
            $this->app['fate'] = $this->app->share(
                function($app)
                {
                    return new Fate();
                }
            );
            $this->app['command.fate.update'] = $this->app->share(
                function($app)
                {
                    return new FateUpdateCommand();
                }
            );
        }
}
