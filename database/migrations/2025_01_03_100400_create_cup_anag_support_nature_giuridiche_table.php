<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unico_nature_giuridiche', function (Blueprint $table) {
            $table->id();
            $table->string('codice')->unique();
            $table->string('descrizione');
            $table->boolean('estera')->default(0);
            $table->nullableTimestamps();
            $table->nullableOwnerships();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('unico_nature_giuridiche');
    }

};
