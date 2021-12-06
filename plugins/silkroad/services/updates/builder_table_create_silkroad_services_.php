<?php namespace silkRoad\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSilkroadServices extends Migration
{
    public function up()
    {
        Schema::create('silkroad_services_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('desc');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('silkroad_services_');
    }
}
