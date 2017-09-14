<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('regions', function (Blueprint $table) {
            $table->string('id', 36)->unique();
            $table->string('name');
            $table->char('short_name', 10)->comment('Краткое наименование типа объекта');
            $table->string('level')->comment('уровень объекта');
            $table->string('parent_id')->comment('Код родителя');
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->string('id', 36)->unique();
            $table->string('name')->comment('Официальное наименование нас. пункта');
            $table->char('short_name', 10)->comment('Краткое наименование типа объекта');
            $table->string('parent_id')->comment('Код родителя');

            $table->foreign('parent_id')->references('id')->on('regions');
        });

        Schema::create('streets', function (Blueprint $table) {
            $table->string('id', 36)->unique();
            $table->string('name');
            $table->char('short_name', 10)->comment('Краткое наименование типа объекта');
            $table->string('parent_id')->comment('Код родителя');

            $table->foreign('parent_id')->references('id')->on('cities');
        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('postal_code')->comment('Почтовый индекс');
            $table->string('region_id', 36)->comment('Код ФИАС региона | Внешний ключ');
            $table->string('city_id', 36)->comment('Код ФИАС города  | Внешний ключ');
            $table->string('street_id', 36)->comment('Код ФИАС улицы  | Внешний ключ');
            $table->string('home')->nullable()->comment('Номер дома/строения');
            $table->string('flat')->nullable()->comment('Квартира/офис');

            //Добавим внешние ключи
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('street_id')->references('id')->on('streets');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign(['company_id']);
            $table->dropForeign(['region_id']);
            $table->dropForeign(['city_id']);
            $table->dropForeign(['street_id']);
        });

        Schema::dropIfExists('addresses');
        Schema::dropIfExists('regions');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('streets');
        Schema::dropIfExists('company_address');
    }
}
