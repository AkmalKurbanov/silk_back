<?php namespace silkRoad\Advantages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadAdvantages extends Migration
{
    public function up()
    {
        Schema::table('silkroad_advantages_', function($table)
        {
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_advantages_', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
