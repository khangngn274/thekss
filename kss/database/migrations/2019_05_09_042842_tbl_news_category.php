<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblNewsCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_news_category', function (Blueprint $table) {
            $table->bigIncrements('news_category_id');
            $table->string('news_category_name');
            $table->string('news_category_name_en');
            $table->string('news_category_alias');
            $table->tinyInteger('news_category_status');
            $table->rememberToken();
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
        Schema::dropIfExists('tbl_news_category');

    }
}
