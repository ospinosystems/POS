<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursals', function (Blueprint $table) {
            $table->increments("id");

            $table->string("sucursal");
            $table->string("codigo")->unique();
            $table->string("direccion_registro");
            $table->string("direccion_sucursal");
            $table->string("telefono1");
            $table->string("telefono2");

            $table->string("correo");
            $table->string("nombre_registro");
            $table->string("rif");
            $table->boolean("iscentral")->default(0);


            $table->string("tickera")->nullable();
            $table->string("fiscal")->nullable();
            $table->string("app_version")->default("1");
            
            $table->timestamps();
        });

        DB::table("sucursals")->insert([
            [
                "sucursal" => "MI COMERCIO",
                "codigo" => "POS01",
                "direccion_registro" => "N/A",
                "direccion_sucursal" => "N/A",
                "telefono1" => "N/A",
                "telefono2" => "N/A",
                "correo" => "N/A",
                "nombre_registro" => "MI COMERCIO",
                "rif" => "J-00000000-0",
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursals');
    }
}
