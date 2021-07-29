<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('fantasy_name',50);
            $table->string('cnpj',19)->nullable();
            $table->string('street',100)->nullable();
            $table->string('number',5)->nullable();
            $table->string('district',50)->nullable();
            $table->string('complement',100)->nullable();
            $table->string('city',50)->nullable();
            $table->string('state',20)->nullable();
            $table->string('cellphone',9)->nullable();
            $table->string('site',50)->nullable();
            $table->string('email',50)->nullable();
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
        Schema::dropIfExists('stores');
    }
}
