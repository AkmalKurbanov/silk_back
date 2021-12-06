<?php namespace silkroad\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSilkroadCalculatorFormula extends Migration
{
    public function up()
    {
        Schema::create('silkroad_calculator_formula', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('main_price');
            $table->string('divider');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('silkroad_calculator_formula');
    }
}
