<?php

namespace Sample;

use Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider {

	public function boot() {

	}

	public function register () {

		include __DIR__.'/routes.php';

	}

}