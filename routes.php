<?php

$this->app->router->group(['namespace' => 'Sample', 'middleware' => ['auth']], function() {
	/* Routes for authenticated users */
	
});

$this->app->router->group(['namespace' => 'Sample', 'middleware' => ['auth', 'admin']], function() {
	/* Routes for authenticated administrator only */
});