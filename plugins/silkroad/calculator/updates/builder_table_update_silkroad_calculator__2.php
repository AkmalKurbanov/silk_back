<?php namespace silkroad\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadCalculator2 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_calculator_', function($table)
        {
            $table->string('main_price', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_calculator_', function($table)
        {
            $table->integer('main_price')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
