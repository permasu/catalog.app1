<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->unsignedInteger('parent')->default('0');
            $table->timestamps();
        });

        //Промежуточная таблица для связи многие-ко-многим
        Schema::create('company_category', function (Blueprint $table){
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('category_id');

            //Внешние ключи
            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->primary(['company_id','category_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('company_category', function (Blueprint $table) {
            $table->dropForeign(['company_id']);
            $table->dropForeign(['category_id']);
        });

        Schema::dropIfExists('categories');
        Schema::dropIfExists('company_category');
    }
}
