<?php namespace silkroad\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadProfile extends Migration
{
    public function up()
    {
        Schema::table('silkroad_profile_', function($table)
        {
            $table->renameColumn('order_number', 'order');
            $table->dropColumn('product_name');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_profile_', function($table)
        {
            $table->renameColumn('order', 'order_number');
            $table->text('product_name');
        });
    }
}
