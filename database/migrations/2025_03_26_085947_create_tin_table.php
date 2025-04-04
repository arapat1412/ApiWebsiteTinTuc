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
        Schema::create('tin', function (Blueprint $table) {
            $table->tinyInteger("id_tin",true,true);
            $table->string("tieude",255);
            $table->char("hinhdaidien",100);
            $table->string("mota",255);
            $table->text("noidung");
            $table->dateTime("ngaydangtin");
            $table->string("tacgia",20);
            $table->integer("solanxem")->default(0);
            $table->boolean("tinhot");
            $table->boolean("trangthai")->default(true);
            $table->tinyInteger("id_loaitin")->unsigned();
            $table->foreign('id_loaitin')->references('id_loaitin')->on('loai_tin')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tin');

        Schema::table('tin', function (Blueprint $table) {
            $table->dropForeign(['tin_id_loaitin_foreign']);
            $table->dropIndex(['tin_id_loaitin_foreign']);
        });
    }
};
