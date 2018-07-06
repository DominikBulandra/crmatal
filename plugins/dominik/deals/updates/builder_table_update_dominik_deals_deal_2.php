<?php namespace Dominik\Deals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikDealsDeal2 extends Migration
{
    public function up()
    {
        Schema::table('dominik_deals_deal', function($table)
        {
            $table->integer('deal_type_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_deals_deal', function($table)
        {
            $table->dropColumn('deal_type_id');
        });
    }
}
