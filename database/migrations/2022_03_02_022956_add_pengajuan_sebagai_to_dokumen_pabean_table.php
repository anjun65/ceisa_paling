<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPengajuanSebagaiToDokumenPabeanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dokumen_pabeans', function (Blueprint $table) {
            $table->string('pengajuan_sebagai');
            $table->string('jenis_pemberitahuan_lanjut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dokumen_pabeans', function (Blueprint $table) {
            //
        });
    }
}
