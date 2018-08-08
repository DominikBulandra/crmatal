<?php namespace Dominik\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikClientsClient extends Migration
{
    public function up()
    {
        Schema::create('dominik_clients_client', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->text('email');
            $table->string('phone');
            $table->string('city');
            $table->string('citycode');
            $table->string('street');
            $table->string('number');
            $table->boolean('gender');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_clients_client');
    }
}
