<?php namespace RainLab\User\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRainlabUserMailBlockers4 extends Migration
{
    public function up()
    {
        Schema::table('rainlab_user_mail_blockers', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('email', 191)->default('null')->change();
            $table->string('template', 191)->default('null')->change();
            $table->integer('user_id')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rainlab_user_mail_blockers', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('email', 191)->default('\'null\'')->change();
            $table->string('template', 191)->default('\'null\'')->change();
            $table->integer('user_id')->default(NULL)->change();
        });
    }
}
