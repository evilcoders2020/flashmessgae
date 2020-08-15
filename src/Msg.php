<?php

namespace EvilCoders\FlashMessage;

class Msg{
    
    public static function error($message)
    {
        session()->flash("flash_message", $message);
        session()->flash("flash_message_type", 'error');
    }

    public static function success($message)
    {
        session()->flash("flash_message", $message);
        session()->flash("flash_message_type", 'success');
    }


    public static function info($message)
    {
        session()->flash("flash_message", $message);
        session()->flash("flash_message_type", 'info');
    }


    public static function warning($message)
    {
        session()->flash("flash_message", $message);
        session()->flash("flash_message_type", 'warning');
    }


    public static function createdSuccessFully()
    {
        self::success("با موفقیت ایجاد شد");
    }
    public static function deletedSuccessFully()
    {
        self::success("با موفقیت حذف شد");
    }
    public static function updatedSuccessFully()
    {
        self::success("با موفقیت به روزرسانی شد");
    }

}