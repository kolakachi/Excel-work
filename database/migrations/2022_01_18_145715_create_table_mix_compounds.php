<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMixCompounds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mix_compounds', function (Blueprint $table) {
            $table->id();
            $table->text('Name')->nullable();
            $table->text('IUPAC Name')->nullable();
            $table->text('InChI')->nullable();
            $table->text('InChI Key')->nullable();
            $table->text('SMILES')->nullable();
            $table->text('CAS')->nullable();
            $table->text('DTXSID')->nullable();            
            $table->text('risk_huter_id')->nullable();
            $table->text('ontox_id')->nullable();
            $table->text('precisiontox_id')->nullable();
            $table->text('used_in_risk_huter')->nullable();
            $table->text('used_in_ontox')->nullable();
            $table->text('used_in_precisiontox')->nullable();

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
        Schema::dropIfExists('mix_compounds');
    }
}
