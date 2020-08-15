# flashmessgae
This package show messages such as validationError and custom messages

# Usage

1- run 'composer require evilcoders/flashmessage'

2- add provider in config/app.php
        EvilCoders\FlashMessage\MsgServiceProvider::class,

3-add aliases in config/app.php
        "Msg" => EvilCoders\FlashMessage\MsgFacade::class,

4- run 'php artisan vendor:publish'

5- add jquery
suggest link : 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>

6- include 'msg.messages' in bottom of layout.
  '@include('msg.messages')'


# Commands

Msg::error('مشکلی در پردازش دیتا رخ داده است');

Msg::succeess('با موفقیت ارسال شد');

Msg::info('با شما تماس گرفته خواهد شد');

Msg::warning('انجام این کار ممکن است باعث حذف دیتا شود');


Msg::updatedSuccessFully(); // با موفقیت ایجاد شد

Msg::deletedSuccessFully(); // با موفقیت حذف شد

Msg::updatedSuccessFully(); //با موفقیت بروزرسانی شد





