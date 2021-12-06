<?php namespace silkroad\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadCalculator10 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_calculator_', function($table)
        {
            $table->boolean('pub');
            $table->string('city_price', 191)->default('null')->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_calculator_', function($table)
        {
            $table->dropColumn('pub');
            $table->string('city_price', 191)->default('\'null\'')->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
