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
        Schema::create('loai_tin', function (Blueprint $table) {
            $table->tinyIncrements("id_loaitin",true,true);
            $table->string("ten_loaitin",30);
            $table->boolean('trangthai')->default(true);
            $table->tinyInteger("id_nhomtin")->unsigned();
            $table->foreign('id_nhomtin')->references('id_nhomtin')->on('nhom_tin')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loai_tin');
        Schema::table('loai_tin', function (Blueprint $table) {
            $table->dropForeign(['loai_tin_id_nhomtin_foreign']);
            $table->dropIndex(['loai_tin_id_nhomtin_foreign']);
        });
    }
};
