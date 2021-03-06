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
            $table->string("pos_tarif")->nullable();
            $table->string("uraian_barang")->nullable();
            $table->string("merek")->nullable();
            $table->string("jumlah_satuan")->nullable();
            $table->string("bruto")->nullable();
            
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
