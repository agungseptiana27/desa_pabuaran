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
        Schema::create('kependudukans', function (Blueprint $table) {
            $table->id();
            $table->integer('total')->default(0);
            $table->integer('male')->default(0);
            $table->integer('female')->default(0);
            $table->integer('family_head')->default(0);
            $table->integer('death')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kependudukans');
    }
};
