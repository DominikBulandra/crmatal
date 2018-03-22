<?php namespace Dominik\Menu;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
			//'KurtJensen\MyCalendar\Components\Test' => 'Test',
			'Dominik\menu\Components\menu' => 'menu',
			
		];
    }

    public function registerSettings()
    {
    }
}
