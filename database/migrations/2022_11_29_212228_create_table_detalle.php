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
        Schema::create('skin_venta', function (Blueprint $table) {
            $table->id();
            $table->decimal("precio",5,2);
            $table->string("descripcion",80);
            $table->unsignedBigInteger("venta_id");
            $table->unsignedBigInteger("skin_id");
            $table->foreign("venta_id")->references("id")->on("ventas");
            $table->foreign("skin_id")->references("id")->on("skins");
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
        Schema::dropIfExists('skin_venta');
    }
};
