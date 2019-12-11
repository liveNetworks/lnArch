<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\DemoApp\VM\VMIndex;

class VMIndexProvider extends ServiceProvider
{
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton(VMIndex::class, function ($app) {
			return new VMIndex();
		});
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}
}
