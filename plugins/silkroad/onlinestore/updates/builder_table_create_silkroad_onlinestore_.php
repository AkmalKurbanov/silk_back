<?php namespace silkroad\OnlineStore\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSilkroadOnlinestore extends Migration
{
    public function up()
    {
        Schema::create('silkroad_onlinestore_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('desc');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('silkroad_onlinestore_');
    }
}
