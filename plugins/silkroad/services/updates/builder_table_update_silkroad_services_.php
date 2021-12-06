<?php namespace silkRoad\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadServices extends Migration
{
    public function up()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
