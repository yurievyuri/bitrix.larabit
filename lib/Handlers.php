<?php
namespace Dev\Larabit;
use Bitrix\Main\Loader;

class Handlers
{
    public static function moduleOnProlog()
    {
        Loader::includeModule('dev.larabit');
    }
}