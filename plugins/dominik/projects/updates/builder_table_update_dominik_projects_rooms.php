<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikProjectsRooms extends Migration
{
    public function up()
    {
        Schema::table('dominik_projects_rooms', function($table)
        {
            $table->integer('places_id');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dominik_projects_rooms', function($table)
        {
            $table->dropColumn('places_id');
            $table->increments('id')->unsigned()->change();
        });
    }
}
