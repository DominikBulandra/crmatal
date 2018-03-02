<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikProjectsRooms extends Migration
{
    public function up()
    {
        Schema::create('dominik_projects_rooms', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->double('area', 10, 0);
            $table->double('measured_area', 10, 0);
            $table->integer('roomtype_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_projects_rooms');
    }
}
