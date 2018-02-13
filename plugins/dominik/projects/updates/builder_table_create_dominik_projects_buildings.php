<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikProjectsBuildings extends Migration
{
    public function up()
    {
        Schema::create('dominik_projects_buildings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('notation');
            $table->integer('floors');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_projects_buildings');
    }
}
