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
		Schema::create('access_logs', function (Blueprint $table) {
			$table->id();
			$table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
			$table->string('pagina');
			$table->timestamp('fecha_acceso')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('access_logs');
	}

};
