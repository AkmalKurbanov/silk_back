<?php namespace silkroad\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadCalculator8 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_calculator_', function($table)
        {
            $table->string('city_price', 191)->nullable()->default('null')->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_calculator_', function($table)
        {
            $table->string('city_price', 191)->nullable(false)->default(null)->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
