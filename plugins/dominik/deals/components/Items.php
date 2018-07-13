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
use dominik\projects\models\Apartments;
class Items extends ComponentBase
{
   public function componentDetails() {
		return [
			'name' => 'lista',
			'description' => 'zawartość koszyka na stronie',
		];
}

	public function onRun() {
		$this->addCss('/plugins/dominik/deals/assets/items.css');

		



		
		$users2 = Cookie::get();

		$this->page['items'] = $users2;
		
		
	}
	
    
}
