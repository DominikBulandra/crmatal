<?php namespace Dominik\Deals;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
        'Dominik\deals\Components\Basketlist' => 'Basketlist',
        ];
    }

    public function registerSettings()
    {
    }
}
