<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table
                ->unsignedBigInteger('user_id');
                $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->decimal('total_sum', 8, 2);
            $table
                ->unsignedBigInteger('status_id')->default(0);
                $table->foreign('status_id')
                    ->references('id')->on('status')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
