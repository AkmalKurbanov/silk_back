<?php namespace silkRoad\Advantages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadAdvantages2 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_advantages_', function($table)
        {
            $table->text('desc');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_advantages_', function($table)
        {
            $table->dropColumn('desc');
        });
    }
}
