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
        Schema::create('event_onlies', function (Blueprint $table) {
            $table->id();
           $table->string('judul')->nullable();
        $table->text('deskripsi')->nullable();
        $table->string('location')->nullable();
        $table->date('date')->nullable();
        $table->string('gambar_event')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_onlies');
    }
};
