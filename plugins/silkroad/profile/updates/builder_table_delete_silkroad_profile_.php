<?php namespace silkroad\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSilkroadProfile extends Migration
{
    public function up()
    {
        Schema::dropIfExists('silkroad_profile_');
    }
    
    public function down()
    {
        Schema::create('silkroad_profile_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('order', 191);
        });
    }
}
