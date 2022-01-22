<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableLaravelCompounds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('compound_sheets', function (Blueprint $table) {
            $table->text('DNT')->nullable();
            $table->text('STOT')->nullable();
            $table->text('NGC')->nullable();
            $table->text('Tanimoto Similarity')->nullable();
            $table->text('available PDB codes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compound_sheets', function (Blueprint $table) {
            //
        });
    }
}
