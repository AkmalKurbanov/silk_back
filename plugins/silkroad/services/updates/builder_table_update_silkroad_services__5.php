<?php namespace silkRoad\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadServices5 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->text('additional_tariff_title1');
            $table->text('additional_tariff_desc1');
            $table->text('additional_tariff_title2');
            $table->text('additional_tariff_desc2');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->dropColumn('additional_tariff_title1');
            $table->dropColumn('additional_tariff_desc1');
            $table->dropColumn('additional_tariff_title2');
            $table->dropColumn('additional_tariff_desc2');
        });
    }
}
