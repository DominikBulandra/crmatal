<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikProjectsApartments2 extends Migration
{
    public function up()
    {
        Schema::table('dominik_projects_apartments', function($table)
        {
            $table->integer('type_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_projects_apartments', function($table)
        {
            $table->dropColumn('type_id');
        });
    }
}
