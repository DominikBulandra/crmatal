<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikProjectsProjects extends Migration
{
    public function up()
    {
        Schema::create('dominik_projects_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('notation')->nullable();
            $table->text('about')->nullable();
            $table->integer('city_id');
            $table->integer('nr_inwestycji');
            $table->string('grupa');
            $table->integer('balcony_price_m2');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_projects_projects');
    }
}
