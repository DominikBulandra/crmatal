<?php namespace Dominik\menu\Components;

use Cms\Classes\ComponentBase;
use dominik\menu\models\items;
use DB;
use Response;
use Redirect;
use Input;
use Auth;
use View;
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
    
}
