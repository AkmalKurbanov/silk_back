<?php namespace silkRoad\Advantages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadAdvantages3 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_advantages_', function($table)
        {
            $table->renameColumn('name', 'title');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_advantages_', function($table)
        {
            $table->renameColumn('title', 'name');
        });
    }
}
