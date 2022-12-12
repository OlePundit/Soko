<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('category');
            $table->string('product_name');
            $table->string('volume');
            $table->string('stock');
            $table->integer('price');
<<<<<<< HEAD
            $table->text('description')->nullable()->default();
=======
            $table->text('description')->nullable();
>>>>>>> 2ad33420bf1c579a0d2093115bcff79ab1db1291
            $table->string('image');      
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
        Schema::dropIfExists('products');
    }
};
