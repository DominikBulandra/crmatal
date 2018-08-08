<?php namespace Dominik\clients\Components;

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
class Create extends ComponentBase
{
   public function componentDetails() {
		return [
			'name' => 'Nowy klient',
			'description' => 'Dodawanie klienta',
		];
}
function onNewClick()
{
    return ['#myDiv2' => $this->renderPartial('clients/create')];
}
function onAllClick()
{
    return ['#myDiv2' => $this->renderPartial('clients/all')];
}
public function onCreate()
    {
        // Collect input
        //$name = post('name');
         Db::table('dominik_clients_client')->insert(
    ['firstname' => post('firstname'),
    'lastname' => post('lastname'),
     'borndate' => post('borndate'),
     'email' => post('email'),
     'citycode' => post('zip'),
     'offer_agree' => post('comercial'),
     'city' => post('city'),
     'number' => post('street_number'),
     'street' => post('street_number'),
     'gender' => post('gender'),
      'user_id' => Auth::getUser()->id,
    
 ]);
        return 'Hello World';
    }
public function onRun() {
		
		
	}
	
    
}
