<?php

	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Support\Facades\Schema;

	return new class extends Migration {
		public function up()
		{
			Schema::create('kontak', function (Blueprint $table) {
				$table->id();
				$table->string('nama')->nullable();
				$table->string('alamat')->nullable();
				$table->string('telepon')->nullable();
				$table->timestamps();
			});
		}

		public function down()
		{
			Schema::dropIfExists('kontak');
		}
	};
