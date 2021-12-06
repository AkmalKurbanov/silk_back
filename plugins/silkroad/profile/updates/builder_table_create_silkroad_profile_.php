<?php namespace silkroad\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSilkroadProfile extends Migration
{
    public function up()
    {
        Schema::create('silkroad_profile_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('order_number');
            $table->text('product_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('silkroad_profile_');
    }
}
