<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->unsignedBigInteger('product_category_id');
            $table->integer('product_type_id');
            $table->string('product_name');
            $table->string('product_name_en');
            $table->string('product_code');
            $table->text('product_description');
            $table->text('product_description_en');           
            $table->text('product_applications');
            $table->text('product_applications_en');
            $table->text('product_specification');
            $table->text('product_specification_en');
            $table->float('product_price');
            $table->string('product_image');
            $table->enum('product_status', ['active', 'inactive'])->default('active');    
            $table->timestamps();
            $table->foreign('product_category_id')->references('category_id')->on('tbl_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_product');
    }
}
