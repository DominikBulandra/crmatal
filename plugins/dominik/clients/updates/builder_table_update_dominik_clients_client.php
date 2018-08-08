<?php namespace Dominik\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikClientsClient extends Migration
{
    public function up()
    {
        Schema::table('dominik_clients_client', function($table)
        {
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_clients_client', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
