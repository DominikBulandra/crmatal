<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikProjectsPlaces extends Migration
{
    public function up()
    {
        Schema::rename('dominik_projects_apartments', 'dominik_projects_places');
    }
    
    public function down()
    {
        Schema::rename('dominik_projects_places', 'dominik_projects_apartments');
    }
}
