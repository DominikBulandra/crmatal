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
class Dealsview extends ComponentBase
{
	 use \System\Traits\ViewMaker;
   public function componentDetails() {
		return [
			'name' => 'DealsView',
			'description' => 'Widok umów',
		];
}
function onReservationClick()
{
    return ['#myDiv' => $this->renderPartial('deals/UR')];
}
function onDeveloperClick()
{
    return ['#myDiv' => $this->renderPartial('deals/UD')];
}
function onSellClick()
{
    return ['#myDiv' => $this->renderPartial('deals/US')];
}
	public function onRun() {
		
		
	}
	
    
}
