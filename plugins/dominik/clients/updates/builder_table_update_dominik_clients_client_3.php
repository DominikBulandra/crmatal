<?php namespace Dominik\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikClientsClient3 extends Migration
{
    public function up()
    {
        Schema::table('dominik_clients_client', function($table)
        {
            $table->boolean('offer_agree');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_clients_client', function($table)
        {
            $table->dropColumn('offer_agree');
        });
    }
}
