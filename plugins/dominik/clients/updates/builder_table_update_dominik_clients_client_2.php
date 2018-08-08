<?php namespace Dominik\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikClientsClient2 extends Migration
{
    public function up()
    {
        Schema::table('dominik_clients_client', function($table)
        {
            $table->date('borndate');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_clients_client', function($table)
        {
            $table->dropColumn('borndate');
        });
    }
}
