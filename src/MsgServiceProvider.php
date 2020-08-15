<?php
namespace EvilCoders\FlashMessage;

use Illuminate\Support\ServiceProvider;


class MsgServiceProvider extends ServiceProvider 
{
  public function register(){
      $this->app->bind('Msg', function(){
          return new Msg;
      });
  }



  public function boot()
  {
      $this->loadViewsFrom(__DIR__.'/Views','messages');
      $this->publishes([
        __DIR__.'\Views' => base_path('resources/views/msg'),
      ]);
  }
}