<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikProjectsBuildings extends Migration
{
    public function up()
    {
        Schema::table('dominik_projects_buildings', function($table)
        {
            $table->integer('project_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_projects_buildings', function($table)
        {
            $table->dropColumn('project_id');
        });
    }
}
