<?php namespace silkRoad\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadServices2 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->text('desc_right');
            $table->string('slug')->change();
            $table->renameColumn('desc', 'desc_left');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->dropColumn('desc_right');
            $table->string('slug', 191)->change();
            $table->renameColumn('desc_left', 'desc');
        });
    }
}
