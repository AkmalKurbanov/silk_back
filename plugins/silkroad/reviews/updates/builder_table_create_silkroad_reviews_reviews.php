<?php namespace silkroad\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSilkroadReviewsReviews extends Migration
{
    public function up()
    {
        Schema::create('silkroad_reviews_reviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->text('message');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('silkroad_reviews_reviews');
    }
}
