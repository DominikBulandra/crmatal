<?php namespace Dominik\Projects\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use dominik\projects\models\project as ProjecModel;
use db;

class Projects extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController','Backend.Behaviors.RelationController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'config_relation.yaml';
    

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dominik.Projects', 'main-menu-item');
    }
    public function formAfterSave()
    {
        $users = Db::table('dominik_projects_projects')
        ->orderBy('id', 'desc')
        ->first();
        Db::table('user_projects')->insert(
            ['name' => $users->notation, 'code' => $users->id]);
       
    }
    public function makeLists(){
    	return "test";
    }
}
