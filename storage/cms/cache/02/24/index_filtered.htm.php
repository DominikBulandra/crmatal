<?php 
use dominik\projects\Models\places;use dominik\projects\Models\cells;class Cms5a99307e702cd142299408_3d15367955b56313ca6dc2a6b625e810Class extends \Cms\Classes\PageCode
{

	
public function onStart() { $this->prepareVars();}
public function onFilterPlaces() { $this->prepareVars();}
public function prepareVars() {
	$options = post('Filter', []);
	$this['places'] = Places::listFrontEnd($options);
	$this['cells'] = Cells::all();
	}
}
