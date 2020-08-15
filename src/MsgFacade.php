<?php
namespace EvilCoders\FlashMessage;

use Illuminate\Support\Facades\Facade;


class MsgFacade extends Facade
{
  protected static function getFacadeAccessor()
  {
      return "Msg";
  }
}