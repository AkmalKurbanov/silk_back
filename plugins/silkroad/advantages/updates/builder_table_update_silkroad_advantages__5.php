<?php namespace silkRoad\Advantages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadAdvantages5 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_advantages_', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_advantages_', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
