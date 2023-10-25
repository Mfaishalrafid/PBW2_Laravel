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
        Schema::table('users', function (Blueprint $table) {
            //6706223073_M. Faishal Rafid_46-03
            $table->string('username', 100);
            $table->string('address', 1000);
            $table->string('phonenumber', 20);
            $table->string('birthdate')->nullable();
            $table->string('religion', 20);
            $table->tinylnt('gender', 4);

            //modifikasi kolom
            $table->renameColumn('name', 'fullname');
            $table->string('email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
