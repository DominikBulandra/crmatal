<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikProjectsProjects6 extends Migration
{
    public function up()
    {
        Schema::table('dominik_projects_projects', function($table)
        {
            $table->text('buildings');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_projects_projects', function($table)
        {
            $table->dropColumn('buildings');
        });
    }
}
