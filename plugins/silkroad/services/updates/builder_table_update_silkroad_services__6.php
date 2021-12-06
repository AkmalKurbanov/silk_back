<?php namespace silkRoad\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadServices6 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->dropColumn('desc_left');
            $table->dropColumn('desc_right');
            $table->dropColumn('tariffs');
            $table->dropColumn('additional_tariff_title1');
            $table->dropColumn('additional_tariff_desc1');
            $table->dropColumn('additional_tariff_title2');
            $table->dropColumn('additional_tariff_desc2');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_services_', function($table)
        {
            $table->text('desc_left');
            $table->text('desc_right');
            $table->text('tariffs');
            $table->text('additional_tariff_title1');
            $table->text('additional_tariff_desc1');
            $table->text('additional_tariff_title2');
            $table->text('additional_tariff_desc2');
        });
    }
}
