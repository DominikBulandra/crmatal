<?php namespace Dominik\Deals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikDealsDealType extends Migration
{
    public function up()
    {
        Schema::table('dominik_deals_deal_type', function($table)
        {
            $table->text('hash');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dominik_deals_deal_type', function($table)
        {
            $table->dropColumn('hash');
            $table->increments('id')->unsigned()->change();
        });
    }
}
