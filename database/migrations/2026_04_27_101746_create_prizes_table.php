<?php


// database/migrations/xxxx_xx_xx_create_prizes_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('prizes', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama hadiah
            $table->text('description')->nullable(); // Deskripsi
            $table->string('image')->nullable(); // Foto hadiah
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prizes');
    }
};