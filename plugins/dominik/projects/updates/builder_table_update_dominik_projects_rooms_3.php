<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikProjectsRooms3 extends Migration
{
    public function up()
    {
        Schema::table('dominik_projects_rooms', function($table)
        {
            $table->renameColumn('placestypes_id', 'places_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_projects_rooms', function($table)
        {
            $table->renameColumn('places_id', 'placestypes_id');
        });
    }
}
