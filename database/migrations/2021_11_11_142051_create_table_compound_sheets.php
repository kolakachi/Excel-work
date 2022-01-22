<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCompoundSheets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compound_sheets', function (Blueprint $table) {
            $table->id();

            $table->text('Target Number')->nullable();
            $table->text('Target ID')->nullable();
            $table->text('UniProt IDs')->nullable();
            $table->text('Target mode')->nullable();
            $table->text('available PDB codes (yes/no)')->nullable();
            $table->text('AlphaFold IDs')->nullable();
            $table->text('Substance Name')->nullable();
            $table->text('IUPAC Name')->nullable();
            $table->text('CAS')->nullable();
            $table->text('DTXSID')->nullable();
            $table->text('InChI Key')->nullable();
            $table->text('InChI')->nullable();
            $table->text('Compound Number')->nullable();

            $table->text('Compound ID')->nullable();
            $table->text('Type')->nullable();
            $table->text('Name')->nullable();
            $table->text('Chemical Class')->nullable();
            $table->text('SMILES')->nullable();
            $table->text('ChEMBL ID')->nullable();
            $table->text('Method')->nullable();

            $table->text('Reference')->nullable();
            $table->text('Link')->nullable();
            $table->text('Supplier')->nullable();
            $table->text('Product No')->nullable();
            $table->text('Description')->nullable();
            $table->text('MW (g/mol)')->nullable();
            $table->text('exp logKow')->nullable();
            $table->text('pre logKow')->nullable();
            $table->text('exp BP (deg C)')->nullable();
            $table->text('pre BP (deg C)')->nullable();

            $table->text('exp MP (deg C)')->nullable();
            $table->text('pre MP (deg C)')->nullable();
            $table->text('exp VP (Pa; 25 deg C)')->nullable();
            $table->text('pre VP (Pa; 25 deg C)')->nullable();
            $table->text('exp_aq_sol_(mg/L; 25 deg C)')->nullable();
            $table->text('pre_aq_sol_(mg/L; 25 deg C)')->nullable();
            $table->text('exp HLC (Pa m3/mole; 25 deg C)')->nullable();
            $table->text('pre HLC (Pa m3/mole; 25 deg C)')->nullable();
            $table->text('Comment')->nullable();
            $table->text('Comments')->nullable();

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
        Schema::dropIfExists('compound_sheets');
    }
}
