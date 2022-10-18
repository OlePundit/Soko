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
            $table->string('product_name');
            $table->integer('selectedCategory');
            $table->integer('selectedSubcategory');
            $table->string('volume')->nullable()->default(0);
            $table->string('type')->nullable()->default(0);
            $table->string('brand')->nullable()->default(0);
            $table->string('transmission')->nullable()->default(0);
            $table->string('consumption')->nullable()->default(0);
            $table->string('numberplate')->nullable()->default(0);
            $table->string('yom')->nullable()->default(0);
            $table->string('processor')->nullable()->default(0);
            $table->string('operatingSystem')->nullable()->default(0);
            $table->string('storageType')->nullable()->default(0);
            $table->string('storageCapacity')->nullable()->default(0);
            $table->string('memory')->nullable()->default(0);
            $table->string('display')->nullable()->default(0);
            $table->string('condition')->nullable()->default(0);
            $table->string('ad_status')->nullable()->default(0);
            $table->integer('price');
            $table->string('attachments')->nullable()->default(0);
            $table->text('description');
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
