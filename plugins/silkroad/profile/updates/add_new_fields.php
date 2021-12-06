<?php namespace Silkroad\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->text('history')->nullable();
            $table->text('tracking')->nullable();
            $table->text('phone')->nullable();
            $table->text('address')->nullable();
            // $table->text('product_name')->nullable();
            // $table->text('order_number')->nullable();
            // $table->text('shop_store')->nullable();
            // $table->text('departure_date')->nullable();
            // $table->text('dispatch_place')->nullable();
            // $table->text('transportation_type')->nullable();
            // $table->text('cargo_weight')->nullable();
            // $table->text('cargo_length')->nullable();
            // $table->text('cargo_height')->nullable();
            // $table->text('cargo_width')->nullable();
            // $table->text('order_status')->nullable();
            // $table->text('total')->nullable();
            // $table->text('sent_from')->nullable();
            // $table->text('heading_to')->nullable();
        });
    }

    public function down()
    {
        $table->dropDown([
            'history',
            'tracking',
            'phone',
            'address',
            // 'product_name',
            // 'order_number',
            // 'shop_store',
            // 'departure_date',
            // 'dispatch_place',
            // 'transportation_type',
            // 'cargo_weight',
            // 'cargo_length',
            // 'cargo_height',
            // 'cargo_width',
            // 'order_status',
            // 'total',
            // 'sent_from',
            // 'heading_to',
        ]);
       
    }

}