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
        Schema::create('nhom_tin', function (Blueprint $table) {
            $table->tinyIncrements("id_nhomtin",true,true);
            $table->string("ten_nhomtin",30);
            $table->boolean('trangthai')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhom_tin');
    }
};
