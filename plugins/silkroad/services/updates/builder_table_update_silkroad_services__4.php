<?php namespace silkRoad\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadServices4 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->text('tariffs');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->dropColumn('tariffs');
        });
    }
}
