<?php namespace Rainlab\User\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUserProjectsTable extends Migration
{
    public function up()
    {
      
         Schema::create('user_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('project_id')->nullable()->index();
            $table->integer('city_id')->nullable()->index();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('users_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('user_id')->unsigned();
            $table->integer('user_project_id')->unsigned();
            $table->primary(['user_id', 'user_project_id'], 'user_project');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_projects');
        Schema::dropIfExists('users_projects');
    }
}
