<?php 
use dominik\projects\Models\places;use dominik\projects\Models\cells;use dominik\projects\Models\buildings;use dominik\menu\components\menu;class Cms5b69501eef5f5411930138_dc926d806d97f759757f775ce9c85545Class extends \Cms\Classes\PageCode
{

	
	
	
public function onStart() { $this->prepareVars();
}
public function onFilterPlaces() { $this->prepareVars();}
public function onFilterCells() { $this->prepareVars();}
public function prepareVars() {
	$value = Session::get('name');
	$options = post('Filter', []);
	$options2 = post('Filter2', []);
	$this['dane'] = Session::get('message');
	$this['places'] = Places::listFrontEnd($options);
	$this['places2']=Session::get('places');
	$this['value'] = Session::get('ev3');
	$this['ev4'] = menu::onCells();
		
	$this['cells'] = Cells::listFrontEnd($options2);
	$this['buildings'] = Db::table('dominik_projects_buildings')->where('project_id', '=', Session::get('message'))->get();
	}
}
