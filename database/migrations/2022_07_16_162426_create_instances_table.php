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
        Schema::create('instances', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // instance name
            $table->string('ip')->unique(); //ip address instance
            $table->integer('type_instance_id')->nullable(); //type instance (ex: db instance)
            $table->string('port')->nullable(); // reference which port are you using can add more than one
            $table->integer('cpu')->nullable(); // total CPU core
            $table->integer('mem')->nullable(); // total RAM in GB
            $table->integer('disk')->nullable(); // total Disk in GB
            $table->boolean('status'); // instance is UP or DOWN
            $table->text('description')->nullable(); // descript the instance
            $table->integer('maintanance_id'); // instance have to normal/error/inprogress/recovered
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
        Schema::dropIfExists('instances');
    }
};
