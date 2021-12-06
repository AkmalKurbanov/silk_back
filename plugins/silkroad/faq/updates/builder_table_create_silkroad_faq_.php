<?php namespace silkRoad\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSilkroadFaq extends Migration
{
    public function up()
    {
        Schema::create('silkroad_faq_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('question');
            $table->text('answer');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('silkroad_faq_');
    }
}
