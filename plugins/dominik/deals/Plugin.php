<?php namespace Dominik\Deals;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
        'Dominik\deals\Components\Basketlist' => 'Basketlist',
        'Dominik\deals\Components\Items' => 'Items',
        ];
    }

    public function registerSettings()
    {
    }
}
