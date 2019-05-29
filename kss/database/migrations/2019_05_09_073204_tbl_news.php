<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblNews extends Migration
{
    public function up()
    {
         Schema::create('tbl_news', function (Blueprint $table) {
            $table->bigIncrements('news_id');
            $table->unsignedBigInteger('category_id');
            $table->string('news_name');
            $table->string('news_name_en');
            $table->text('news_description');
            $table->text('news_description_en');
            $table->string('news_thumbnail');
            $table->string('news_alias');
            $table->enum('news_status', ['active', 'inactive'])->default('active');    
            $table->tinyInteger('news_view')->default(0);
            $table->string('create_by');
            $table->string('update_by');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('category_id')->references('news_category_id')->on('tbl_news_category');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_news');
    }
}


