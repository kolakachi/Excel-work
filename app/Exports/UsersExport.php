<?php

namespace App\Exports;

use App\Models\CompoundModel;
use App\Models\MembershipUserModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{

    private $membershipId;

    public function __construct()
    {
        // $this->membershipId = $membershipId;
    }

    public function collection()
    {
        return CompoundModel::get();
    }


    public function headings(): array
    {
        return [
            'bid',
            'Name',
            'Substance Name',
            'InChI Key',
            'Compound Number',
            'IUPAC Name',
            'CAS',
            'DTXSID',
            'ChEMBL ID',
            'InChI',
            'SMILES',
            'Tanimoto Similarity',
            'Chemical Class',
            'MW (g/mol)',
            'exp logKow',
            'pre logKow',
            'exp BP (deg C)',
            'pre BP (deg C)',

            'exp MP (deg C)',
            'pre MP (deg C)',
            'exp VP (Pa; 25 deg C)',
            'pre VP (Pa; 25 deg C)',
            'exp aq.sol (mg/L; 25 deg C)',
            'pre aq.sol (mg/L; 25 deg C)',
            'exp HLC (Pa m3/mole; 25 deg C)',
            'pre HLC (Pa m3/mole; 25 deg C)',
            'Method',

            'Reference',
            'Link',

            
            'Comment',
            'ID',
            'Type',
            'Supplier',
            'Product No',
            'Description',
            'Comments',
            'Case Study_ID',
            'created_at',
            'updated_at',
            'DNT',
            'STOT',
            'NGC',
            'available PDB codes',
            'Target Number',
            'Target ID',
            'UniProt IDs',
            'Target mode',
            'AlphaFold IDs',
            'available PDB codes (yes/no)',
            
        ];
    }
}
