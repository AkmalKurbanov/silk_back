<?php namespace silkroad\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadReviewsReviews2 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_reviews_reviews', function($table)
        {
            $table->string('surname');
            $table->string('place');
            $table->boolean('pub');
            $table->dropColumn('email');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_reviews_reviews', function($table)
        {
            $table->dropColumn('surname');
            $table->dropColumn('place');
            $table->dropColumn('pub');
            $table->string('email', 191);
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
