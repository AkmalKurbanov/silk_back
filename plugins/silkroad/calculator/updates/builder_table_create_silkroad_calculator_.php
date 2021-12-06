<?php namespace silkroad\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSilkroadCalculator extends Migration
{
    public function up()
    {
        Schema::create('silkroad_calculator_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('city');
            $table->string('main_price');
            $table->string('divider');
            $table->string('city_price');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('silkroad_calculator_');
    }
}
