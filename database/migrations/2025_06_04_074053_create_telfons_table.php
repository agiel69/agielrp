<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('telfons', function (Blueprint $table) {
            $table->id();
        $table->text('alamat');
        $table->string('nomor_telepon');
        $table->string('email');
        $table->integer('status_publis');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telfons');
    }
};
