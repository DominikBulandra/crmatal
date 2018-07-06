<?php namespace Dominik\Deals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikDealsDealType extends Migration
{
    public function up()
    {
        Schema::create('dominik_deals_deal_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_deals_deal_type');
    }
}
