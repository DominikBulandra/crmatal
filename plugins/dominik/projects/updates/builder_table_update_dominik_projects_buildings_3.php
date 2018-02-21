<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikProjectsBuildings3 extends Migration
{
    public function up()
    {
        Schema::table('dominik_projects_buildings', function($table)
        {
            $table->renameColumn('projects_id', 'project_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_projects_buildings', function($table)
        {
            $table->renameColumn('project_id', 'projects_id');
        });
    }
}
