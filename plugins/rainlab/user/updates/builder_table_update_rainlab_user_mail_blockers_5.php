<?php namespace RainLab\User\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRainlabUserMailBlockers5 extends Migration
{
    public function up()
    {
        Schema::table('rainlab_user_mail_blockers', function($table)
        {
            $table->text('history');
            $table->string('email', 191)->default('null')->change();
            $table->string('template', 191)->default('null')->change();
            $table->integer('user_id')->default(null)->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('rainlab_user_mail_blockers', function($table)
        {
            $table->dropColumn('history');
            $table->string('email', 191)->default('\'null\'')->change();
            $table->string('template', 191)->default('\'null\'')->change();
            $table->integer('user_id')->default(NULL)->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
