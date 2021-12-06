<?php namespace silkroad\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadCalculator11 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_calculator_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('city_price', 191)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_calculator_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('city_price', 191)->default('\'null\'')->change();
        });
    }
}
