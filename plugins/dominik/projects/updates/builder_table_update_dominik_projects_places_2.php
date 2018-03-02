<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikProjectsPlaces2 extends Migration
{
    public function up()
    {
        Schema::table('dominik_projects_places', function($table)
        {
            $table->renameColumn('type_id', 'placestypes_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_projects_places', function($table)
        {
            $table->renameColumn('placestypes_id', 'type_id');
        });
    }
}
