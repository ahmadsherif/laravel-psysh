<?php

namespace LaravelPsySH;

use Illuminate\Support\ServiceProvider;
use LaravelPsySH\PsySHCommand;

class PsySHServiceProvider extends ServiceProvider {

  public function register()
  {
    $this->registerPsySHCommand();
  }

  public function registerPsySHCommand()
  {
    $this->app['command.psysh'] = $this->app->share(function($app)
    {
      return new PsySHCommand();
    });

    $this->commands('command.psysh');
  }

}
