<?php namespace Dominik\Projects\Components;

use Cms\Classes\ComponentBase;
use dominik\projects\models\Projects;
use DB;
class Projectslist extends ComponentBase
{
   public function componentDetails() {
		return [
			'name' => 'listaprojektów',
			'description' => 'rozwijana lista projektów',
		];
}

	public function onRun() {
		$roles = Db::table('dominik_projects_projects')->lists('id', 'notation');
		$this->page['ev'] = $roles;
	}
  public function loadList()
    {
      
        return $this->page['ev'] = [
            'name' => "Dominik",
            'date' => "17:04:1990",
            
        ];
    }
}
