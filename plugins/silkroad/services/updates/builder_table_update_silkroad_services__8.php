<?php namespace silkRoad\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadServices8 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->text('content');
            $table->dropColumn('title1');
            $table->dropColumn('sub_title');
            $table->dropColumn('description');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->dropColumn('content');
            $table->text('title1');
            $table->text('sub_title');
            $table->text('description');
        });
    }
}
