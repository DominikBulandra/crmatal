<?php namespace Dominik\menu\Components;

use Cms\Classes\ComponentBase;
use dominik\menu\models\items;
use DB;
use Response;
use Redirect;
use Input;
use Auth;
use View;
use Cookie;
use Cms\Classes\Page;
class menu extends ComponentBase
{
   public function componentDetails() {
		return [
			'name' => 'Menu',
			'description' => 'Menu zalezne od zalogowanego usera',
		];
}

	public function onRun() {
		if (Auth::check()) {
				$user = Auth::getUser();
		$items=Db::table('dominik_menu_items')->where('usergroup_id', '3')->lists('name','slogan');
		
		$users2 = Db::table('users')
    	->join('users_projects', 'users.id', '=', 'users_projects.user_id')
    	->join('user_projects', 'user_projects.id', '=', 'users_projects.user_project_id')
    	->select('user_projects.name', 'users.id')
    	->where('users.id', $user->id)
    	->lists('id', 'name');
		}
		
		if (Auth::check()) {
		$this->page['ev2'] = $items;}
		
		
	}
	public function onSave2()
    {
   
    $param=Input::get('slug');
    //View::share('name', 'Steve');
    
    
    return Redirect::to('/'.$param)->with(['message'=> $param,'name'=>'steve']);
    }
    public static function onApartments(){
            $apart=db::table('dominik_projects_projects')
        ->join('dominik_projects_buildings', 'dominik_projects_projects.id', '=', 'dominik_projects_buildings.project_id')
        ->join('dominik_projects_cells', 'dominik_projects_cells.buildings_id', '=', 'dominik_projects_buildings.id')
        ->join('dominik_projects_places', 'dominik_projects_cells.id', '=', 'dominik_projects_places.cell_id')
        ->select('dominik_projects_places.*')
        ->where('dominik_projects_projects.id', Cookie::get('name'))
        ->where('dominik_projects_places.placestypes_id', '1')
        ->get()     ;
        return $apart;
    }
    public static function onGarages(){
            $apart=db::table('dominik_projects_projects')
        ->join('dominik_projects_buildings', 'dominik_projects_projects.id', '=', 'dominik_projects_buildings.project_id')
        ->join('dominik_projects_cells', 'dominik_projects_cells.buildings_id', '=', 'dominik_projects_buildings.id')
        ->join('dominik_projects_places', 'dominik_projects_cells.id', '=', 'dominik_projects_places.cell_id')
        ->select('dominik_projects_places.id','dominik_projects_places.cell_id', 'dominik_projects_places.notation')
        ->where('dominik_projects_projects.id', Cookie::get('name'))
        ->where('dominik_projects_places.placestypes_id', '2')
        ->get()     ;
        return $apart;
    }
     public static function onCells(){
            $apart=db::table('dominik_projects_projects')
        ->join('dominik_projects_buildings', 'dominik_projects_projects.id', '=', 'dominik_projects_buildings.project_id')
        ->join('dominik_projects_cells', 'dominik_projects_cells.buildings_id', '=', 'dominik_projects_buildings.id')
        ->join('dominik_projects_places', 'dominik_projects_cells.id', '=', 'dominik_projects_places.cell_id')
        ->select('dominik_projects_places.id','dominik_projects_places.cell_id', 'dominik_projects_places.notation')
        ->where('dominik_projects_projects.id', Cookie::get('name'))
        ->where('dominik_projects_places.placestypes_id', '4')
        ->get()     ;
        return $apart;
    }
    
}
