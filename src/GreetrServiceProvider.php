<?php
namespace Bcamq\Greetr;

use Illuminate\Support\ServiceProvider;

class GreetrServiceProvider extends ServiceProvider {
  public function register()
  {
  }

  public function boot()
  {
    $this->loadRoutesFrom(__DIR__.'/route.php');
    $this->loadViewsFrom(__DIR__.'/views', 'greetr');
    $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'contact');
    $this->publishes([__DIR__.'/config/contact.php' => config_path('contact.php')]);
    $this->publishes([
        __DIR__ . '/database/seeds/ContactTableSeeder.php' => database_path('seeders/ContactTableSeeder.php'),
    ], 'contact-seeds');
  }
}
