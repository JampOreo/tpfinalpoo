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
		Schema::create('comments', function (Blueprint $table) {
			$table->id();
			$table->text('contenido');
			$table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
			$table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
			$table->timestamp('fecha_publicacion')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('comments');
	}

};
