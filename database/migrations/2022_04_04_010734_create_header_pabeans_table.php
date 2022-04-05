<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaderPabeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_pabeans', function (Blueprint $table) {
            $table->id();
            $table->string("users_id");
            $table->string("nomor_aju_pabean");
            $table->string("kantor_aju_pabean");
            $table->string("kategori_pemberitahuan");
            $table->string("kategori_pemasukan");
            $table->string("tujuan_pemasukan");
            $table->string("asal_barang");
            $table->string("jenis_faktur");

            $table->string("jenis_identitas_pengirim");
            $table->string("nomor_identitas_pengirim");
            $table->string("nama_pengirim");
            $table->string("alamat_pengirim");

            $table->string("jenis_identitas_penerima");
            $table->string("nomor_identitas_penerima");
            $table->string("nama_penerima");
            $table->string("alamat_penerima");
            $table->string("nomor_ijin_bpk_penerima");


            $table->string("npwp_ppjk")->nullable();
            $table->string("nama_ppjk")->nullable();
            $table->string("alamat_ppjk")->nullable();

            $table->string("nilai_barang");

            $table->string("nilai_bc11");
            $table->date("tanggal_bc11");
            $table->string("pos_bc11");
            $table->string("subpos_bc11");
            $table->string("subsubpos_bc11");

            $table->string("cara_angkut");
            $table->string("nama_angkut");
            $table->string("bendera");
            $table->string("nomor_voy_flight_pol");

            $table->string("pelabuhan_muat");
            $table->string("pelabuhan_tujuan");
            $table->string("pelabuhan_transit");

            $table->string("berat_bersih");
            $table->string("berat_kotor");
            $table->string("volume");

            $table->date("perkiraan_tanggal_pemasukan");
            $table->string("jumlah_jenis_kemasan");
            $table->string("jumlah_peti_kemas");
            $table->string("jumlah_jenis_barang");
            $table->string("tempat_penimbunan");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('header_pabeans');
    }
}
