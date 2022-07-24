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
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->string('domain'); //domain name
            $table->string('ip')->nullable(); // ip the domain
            $table->boolean('status');  // domain is UP or DOWN
            $table->integer('maintanance_id'); // domain have to normal/error/inprogress/recovered
            $table->text('description')->nullable(); // descript the domain use for
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
        Schema::dropIfExists('domains');
    }
};
