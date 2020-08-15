<?php
namespace EvilCoders\FlashMessage;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;


class MsgServiceProvider extends ServiceProvider 
{
  public function register(){
      $this->app->bind('Msg', function(){
          return new Msg;
      });

      $this->app->register(\EvilCoders\FlashMessage\MsgServiceProvider::class);
      $loader = AliasLoader::getInstance();
      $loader->alias('Msg',\EvilCoders\FlashMessage\MsgFacade::class);
  }



  public function boot()
  {
      $this->loadViewsFrom(__DIR__.'/Views','messages');
      $this->publishes([
        __DIR__.'\Views' => base_path('resources/views/msg'),
      ]);

  }
}
