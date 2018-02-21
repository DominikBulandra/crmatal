<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikProjectsCells extends Migration
{
    public function up()
    {
        Schema::create('dominik_projects_cells', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('notation');
            $table->integer('buildings_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_projects_cells');
    }
}
