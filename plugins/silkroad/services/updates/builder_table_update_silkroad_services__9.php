<?php namespace silkRoad\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadServices9 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->boolean('pub_shops');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->dropColumn('pub_shops');
        });
    }
}
