<?php namespace Dominik\Projects;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {	return [
			//'KurtJensen\MyCalendar\Components\Test' => 'Test',
			'Dominik\projects\Components\Projectslist' => 'Projectslist',
			
		];
    }

    public function registerSettings()
    {
    }
}
