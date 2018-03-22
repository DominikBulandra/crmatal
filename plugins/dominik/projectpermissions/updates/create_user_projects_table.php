<?php namespace Dominik\Projectpermissions\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUserProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('dominik_projectpermissions_users_projects', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('projects_id')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
        });

        Schema::create('dominik_projectpermissions_user_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('user_id')->unsigned();
            $table->integer('dominik_projectpermissions_users_projects_id')->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dominik_projectpermissions_user_projects');
        Schema::dropIfExists('dominik_projectpermissions_users_projects');
    }
}
