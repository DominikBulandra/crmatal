<?php namespace Dominik\Deals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikDealsDeal extends Migration
{
    public function up()
    {
        Schema::table('dominik_deals_deal', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->renameColumn('set_id', 'basket_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_deals_deal', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->renameColumn('basket_id', 'set_id');
        });
    }
}
