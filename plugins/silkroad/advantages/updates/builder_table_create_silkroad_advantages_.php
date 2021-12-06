<?php namespace silkRoad\Advantages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSilkroadAdvantages extends Migration
{
    public function up()
    {
        Schema::create('silkroad_advantages_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('silkroad_advantages_');
    }
}
