<?php namespace Dominik\Projectpermissions\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUsersProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('dominik_projectpermissions_users_projects', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('projects_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dominik_projectpermissions_users_projects');
    }
}
