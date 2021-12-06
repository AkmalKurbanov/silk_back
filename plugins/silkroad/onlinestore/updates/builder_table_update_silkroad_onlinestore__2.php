<?php namespace silkroad\OnlineStore\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadOnlinestore2 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_onlinestore_', function($table)
        {
            $table->boolean('pub');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_onlinestore_', function($table)
        {
            $table->dropColumn('pub');
        });
    }
}
