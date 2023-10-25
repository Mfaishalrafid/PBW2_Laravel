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
        //
        Schema::create('collections', function (Blueprint $table) {
            //6706223073_M. Faishal Rafid_46-03
            $table->id();
            $table->string(column:'namaKoleksi', length:100);
            $table->tinyInteger(column:'jenisKoleksi' );
            $table->integer(column:'jumlahKoleksi' );
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('collections', function (Blueprint $table) {
        });
        
        
    }
};
