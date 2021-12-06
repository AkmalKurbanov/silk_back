<?php namespace RainLab\User\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UsersAddHistory extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->json('history')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasColumn('users', 'history')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('history');
            });
        }
    }
}
