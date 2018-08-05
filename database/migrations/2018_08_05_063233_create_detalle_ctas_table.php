<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCtasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ctas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inventario_id');
            $table->string('cuenta', 12);
            $table->tinyInteger('ciz_id');
            $table->tinyInteger('delegacion_id');
            $table->integer('gpo_owner_id');
            $table->integer('gpo_default_id');
            $table->tinyInteger('area_id');
            $table->string('nombre',32)->nullable();
            $table->date('created')->nullable();
            $table->date('passdate')->nullable();
            $table->string('passint',5)->nullable();
            $table->string('attribute',50)->nullable();
            $table->dateTime('last_access')->nullable();
            $table->string('install_data', 100)->nullable();
            $table->string('model', 16)->nullable();
            $table->string('comentario', 256)->nullable();

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
        Schema::dropIfExists('detalle_ctas');
    }
}
