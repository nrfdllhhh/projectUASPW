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
        Schema::create('kabkota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provinsi_id');
            $table->string('nama', 100);
            $table->double('latitude');
            $table->double('longitude');
            $table->timestamps();
        });

        Schema::table('kabkota', function (Blueprint $table) {
            $table->foreign('provinsi_id')->references('id')->on('provinsi')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kabkotas');
    }
};
