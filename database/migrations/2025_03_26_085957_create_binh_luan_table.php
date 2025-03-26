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
        Schema::create('binh_luan', function (Blueprint $table) {
            $table->tinyInteger("id_binhluan",true,true);
            $table->string("email",30);
            $table->dateTime("thoigian");
            $table->string("noidung",1000);
            $table->boolean("trangthai");
            $table->tinyInteger("id_tin")->unsigned();
            $table->foreign('id_tin')->references('id_tin')->on('tin')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('binh_luan');
        Schema::table('binh_luan', function (Blueprint $table) {
            $table->dropForeign(['binh_luan_id_binhluan_foreign']);
            $table->dropIndex(['binh_luan_id_binhluan_foreign']);
        });
    }
};
