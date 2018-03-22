<?php namespace Dominik\Menu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikMenuItems extends Migration
{
    public function up()
    {
        Schema::create('dominik_menu_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('usergroup_id');
            $table->string('slogan');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_menu_items');
    }
}
