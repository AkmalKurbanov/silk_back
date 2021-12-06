<?php namespace silkroad\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadReviewsReviews9 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_reviews_reviews', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('pub')->nullable(false)->default(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_reviews_reviews', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->boolean('pub')->nullable()->default(NULL)->change();
        });
    }
}
