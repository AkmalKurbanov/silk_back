<?php namespace silkroad\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSilkroadReviewsReviews4 extends Migration
{
    public function up()
    {
        Schema::table('silkroad_reviews_reviews', function($table)
        {
            $table->renameColumn('place', 'address');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('silkroad_reviews_reviews', function($table)
        {
            $table->renameColumn('address', 'place');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
