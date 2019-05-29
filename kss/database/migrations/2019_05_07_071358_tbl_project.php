<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblProject extends Migration
{
     public function up()
    {
        Schema::create('tbl_project', function (Blueprint $table) {
            $table->bigIncrements('project_id');
            $table->string('project_name');
            $table->string('project_name_en');
            $table->text('project_description');
            $table->text('project_description_en');
            $table->string('project_thumbnail');
            $table->string('project_alias');
            $table->string('project_type');
            $table->tinyInteger('project_status');
            $table->string('project_place');
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
        Schema::dropIfExists('tbl_project');
    }
}
