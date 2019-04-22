<?php

namespace MehrdadMahdian\TelegramBotManger\Facades;

use Illuminate\Support\Facades\Facade;

class TelegramBotManger extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'telegrambotmanger';
    }
}
