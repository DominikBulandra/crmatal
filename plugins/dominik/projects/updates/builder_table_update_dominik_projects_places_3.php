<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikProjectsPlaces3 extends Migration
{
    public function up()
    {
        Schema::table('dominik_projects_places', function($table)
        {
            $table->renameColumn('cell_id', 'cells_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_projects_places', function($table)
        {
            $table->renameColumn('cells_id', 'cell_id');
        });
    }
}
