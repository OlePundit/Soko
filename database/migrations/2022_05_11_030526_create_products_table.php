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
            $table->string('subcategory')->nullable();
            $table->string('product_name');
            $table->string('volume');
            $table->string('type');
            $table->string('brand');
            $table->string('transmission');
            $table->string('consumption');
            $table->string('numberplate');
            $table->string('yom');
            $table->string('processor');
            $table->string('operatingSystem')->nullable();
            $table->string('storageType');
            $table->string('storageCapacity');
            $table->string('memory');
            $table->string('display');
            $table->string('condition');
            $table->string('ad_status');
            $table->integer('price');
            $table->string('attachments');
            $table->text('description')->nullable();
            $table->string('formData');
            
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
