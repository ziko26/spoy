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
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("item_id")->unsigned();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->tinyInteger('statut')->default(0)->unsigned();
            $table->timestamps();
            $table->foreign("user_id")
                  ->references("id")
                  ->on("users")
                  ->onDelete("cascade");
            $table->foreign("item_id")
            ->references("id")
            ->on("items")
            ->onDelete("cascade");      
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
