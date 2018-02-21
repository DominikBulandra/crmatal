<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikProjectsBuildings4 extends Migration
{
    public function up()
    {
        Schema::table('dominik_projects_buildings', function($table)
        {
            $table->renameColumn('id', 'buildings_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_projects_buildings', function($table)
        {
            $table->renameColumn('buildings_id', 'id');
        });
    }
}
