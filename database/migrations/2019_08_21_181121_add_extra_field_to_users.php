<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraFieldToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->char('nik', 16)->unique();
            $table->string('no_hp');
            $table->string('nama_universitas');
            $table->string('semester');
            $table->string('tema');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('no_hp');
            $table->dropColumn('nama_universitas');
            $table->dropColumn('semester');
            $table->dropColumn('nik');
            $table->dropColumn('tema');
        });
    }
}
