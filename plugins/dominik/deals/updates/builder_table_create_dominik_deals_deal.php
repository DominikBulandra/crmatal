<?php namespace Dominik\Deals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikDealsDeal extends Migration
{
    public function up()
    {
        Schema::create('dominik_deals_deal', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('set_id');
            $table->integer('client_set_id');
            $table->string('agrement_numeber');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_deals_deal');
    }
}
