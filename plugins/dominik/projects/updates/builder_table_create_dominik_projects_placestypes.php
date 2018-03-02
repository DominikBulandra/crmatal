<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikProjectsPlacestypes extends Migration
{
    public function up()
    {
        Schema::create('dominik_projects_placestypes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_projects_placestypes');
    }
}
