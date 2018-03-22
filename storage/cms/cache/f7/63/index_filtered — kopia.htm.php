<?php 
use dominik\projects\Models\places;use dominik\projects\Models\cells;use dominik\projects\Models\buildings;class Cms5ab222e8650a3385636632_1a0d6aefcc03d3bfae248217b64e0f4fClass extends \Cms\Classes\PageCode
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
		
	$this['cells'] = Cells::listFrontEnd($options2);
	$this['buildings'] = Db::table('dominik_projects_buildings')->where('project_id', '=', Session::get('message'))->get();
	}
}
