<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('valija_id');
            $table->integer('lote_id');
            $table->tinyInteger('delegacion_id');
            $table->tinyInteger('subdelegacion_id');
            $table->integer('user_id');
            $table->tinyInteger('movimiento_id');
            $table->integer('gpo_actual_id');
            $table->integer('gpo_nuevo_id');
            $table->integer('causa_rechazo_id');
            $table->date('fecha_solicitud');
            $table->string('nombre',50);
            $table->string('primer_apellido',50);
            $table->string('segundo_apellido',50);
            $table->char('matricula',10);
            $table->string('curp',20);
            $table->char('usuario',8);
            $table->string('comentario', 256);
            $table->string('archivo',100);

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
        Schema::dropIfExists('solicitudes');
    }
}
