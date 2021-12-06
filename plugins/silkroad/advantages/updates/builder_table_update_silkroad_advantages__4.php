<?php namespace silkRoad\Advantages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadAdvantages4 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_advantages_', function($table)
        {
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_advantages_', function($table)
        {
            $table->dropPrimary(['id']);
        });
    }
}
