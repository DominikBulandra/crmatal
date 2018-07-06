<?php namespace Dominik\deals\Components;

use Cms\Classes\ComponentBase;
use dominik\deals\models\deals;
use DB;
use Response;
use Redirect;
use Input;
use Auth;
use View;
use Cookie;
use System\Classes\CombineAssets;
use Config;
use Cms\Classes\Page;
class Basketlist extends ComponentBase
{
   public function componentDetails() {
		return [
			'name' => 'listazakupów',
			'description' => 'rozwijana lista zakupów',
		];
}

	public function onRun() {
		$scripts = [
			'dominik/deals/assets/basket.js'
		];
	
		$this->addJs(CombineAssets::combine($scripts, plugins_path()));



		
		$users2 = Cookie::get();

		$this->page['ev3'] = $users2;
		
		
	}
	
    
}
