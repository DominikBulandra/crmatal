<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikProjectsProjects extends Migration
{
    public function up()
    {
        Schema::table('dominik_projects_projects', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dominik_projects_projects', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
