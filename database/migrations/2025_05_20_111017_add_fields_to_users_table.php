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
		Schema::table('users', function (Blueprint $table) {
			$table->string('nombre')->after('id');
			$table->enum('rol', ['usuario', 'comentarista', 'administrador'])->default('usuario')->after('password');
			$table->timestamp('fecha_creacion')->nullable()->after('rol');
		});
	}

	public function down()
	{
		Schema::table('users', function (Blueprint $table) {
			$table->dropColumn(['nombre', 'rol', 'fecha_creacion']);
		});
	}

};
