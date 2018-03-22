<?php namespace Dominik\Projects\Components;

use Cms\Classes\ComponentBase;
use dominik\projects\models\Projects;
use DB;
use Response;
use Redirect;
use Input;
use Auth;
use View;
use Config;
use Cms\Classes\Page;
class Projectslist extends ComponentBase
{
   public function componentDetails() {
		return [
			'name' => 'listaprojektów',
			'description' => 'rozwijana lista projektów',
		];
}

	public function onRun() {
		if (Auth::check()) {
				$user = Auth::getUser();
		$projects=Db::table('users_projects')->where('user_id', $user->id)->lists('user_project_id','user_id');
		$projectsids=Db::table('user_projects')->where('id', 'in', $projects)->lists('id', 'name');
		$users2 = Db::table('users')
    	->join('users_projects', 'users.id', '=', 'users_projects.user_id')
    	->join('user_projects', 'user_projects.id', '=', 'users_projects.user_project_id')
    	->select('user_projects.name', 'users.id')
    	->where('users.id', $user->id)
    	->lists('id', 'name');
		}
		$param=Input::get('idproj');
		 	$places=db::table('dominik_projects_projects')
    	->join('dominik_projects_buildings', 'dominik_projects_projects.id', '=', 'dominik_projects_buildings.project_id')
    	->join('dominik_projects_cells', 'dominik_projects_cells.buildings_id', '=', 'dominik_projects_buildings.id')
    	->join('dominik_projects_places', 'dominik_projects_cells.id', '=', 'dominik_projects_places.cell_id')
    	->select('dominik_projects_places.id', 'dominik_projects_places.notation')
    	->where('dominik_projects_projects.id', '11')
    	->lists('id', 'notation');
   		$this->page['ev3'] = $places;
		View::share('name', 'Steve');
		View::share('siteName', 'OctoberCMS');
		Config::set('siteid', '14');
		View::share('names', 'SteveAdam');

	
		$roles = Db::table('dominik_projects_projects')->lists('id', 'notation');
		if (Auth::check()) {
		$this->page['ev'] = $users2;}
		$this->page['ev2'] = $roles;
		
	}
	public function onSave()
	{
    $params = [
        '1test' => post('project_id')
       
    ];

    $param=Input::get('idproj');
    View::share('name', 'Steve');
    $param2=Config::get('siteid');



    $listingPage = "test";
    $url = $this->controller->pageUrl($listingPage, config('siteid'));
   
    View::share('names', 'SteveAdam');
 	error_log('message here.');
 	$arr= array('Hello','World!','Beautiful','Day!');
	$param3=implode(" ",$param2);

 


    //return View::make('dominik.projects::test', array('idp', $param));
    return Redirect::to('')->with(['message'=> $param,'p2test'=>$param3]);
	}
  	public function loadList()
    {


      
        return $this->page['ev'] = [
            'name' => "Dominik",
            'date' => "17:04:1990",
            
        ];
    }
    
}
