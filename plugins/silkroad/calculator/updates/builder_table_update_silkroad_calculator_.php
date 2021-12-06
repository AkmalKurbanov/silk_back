<?php namespace silkroad\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadCalculator extends Migration
{
    public function up()
    {
        Schema::table('silkroad_calculator_', function($table)
        {
            $table->integer('main_price')->nullable(false)->unsigned(false)->default(null)->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_calculator_', function($table)
        {
            $table->string('main_price', 191)->nullable(false)->unsigned(false)->default(null)->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
