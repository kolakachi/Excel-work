<?php
namespace App\Imports;

use Illuminate\Support\Facades\Mail;
use Log, Exception;
use App\Mail\MembershipRegistrationMail;
use App\Models\MembershipUserModel;
use App\Models\CompoundModel;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\AccessLevelModel;
use App\Models\MembershipSubscriptionModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToCollection, WithHeadingRow
{
    private  $request;
    private $compound;

    public function __construct(Request $request, CompoundModel $compound)
    {
        $this->request =  $request;
        $this->compound = $compound;
    }

    public function collection(Collection $rows)
    {
        // dd($rows);
        foreach ($rows as $row)
        {
            if(isset($row['inchikey'])){
                if($row['inchikey'] != null){
                    $compound = CompoundModel::where('InChI Key', $row['inchikey'])->first();
                    if(!$compound){
                        $compound = new CompoundModel();
                    }
                }
            }else{
                $compound = new CompoundModel();
            }

            if(isset($row['Name'])){
                if($row['Name'] != null){
                    $compound['Name'] = $row['Name'];
                }
            }
            if(isset($row['IUPAC Name'])){
                if($row['IUPAC Name'] != null){
                    $compound['IUPAC Name']  = $row['IUPAC Name'];
                }
            }
            if(isset($row['cas'])){
                if($row['cas'] != null){
                    $compound['CAS']  = $row['cas'];
                }
            }

            if(isset($row['inchikey'])){
                if($row['inchikey'] != null){
                    $compound['InChI Key']  = $row['inchikey'];
                }
            }

            if(isset($row['inchi'])){
                if($row['inchi'] != null){
                    $compound['InChI']  = $row['inchi'];
                }
            }

            if(isset($row['smiles'])){
                if($row['smiles'] != null){
                    $compound['SMILES']  = $row['smiles'];
                }
            }

            if(isset($row['dtxsid'])){
                if($row['dtxsid'] != null){
                    $compound['DTXSID']  = $row['dtxsid'];
                }
            }

            if(isset($row['riskh'])){
                if($row['inchi'] != null){
                    $compound['risk_huter_id']  = $row['inchi'];
                }
            }
            if(isset($row['inchi'])){
                if($row['inchi'] != null){
                    $compound['ontox_id']  = $row['inchi'];
                }
            }
            if(isset($row['inchi'])){
                if($row['inchi'] != null){
                    $compound['precisiontox_id']  = $row['inchi'];
                }
            }

            if(isset($row['riskh'])){
                if($row['inchi'] != null){
                    $compound['used_in_risk_huter']  = $row['inchi'];
                }
            }
            if(isset($row['inchi'])){
                if($row['inchi'] != null){
                    $compound['used_in_ontox']  = $row['inchi'];
                }
            }
            if(isset($row['inchi'])){
                if($row['inchi'] != null){
                    $compound['used_in_precisiontox']  = $row['inchi'];
                }
            }
            
            // if(isset($row['target_number'])){
            //     if($row['target_number'] != null){
            //         $compound['Target Number'] = $row['target_number'];
            //     }
            // }

            // if(isset($row['dnt'])){
            //     if($row['dnt'] != null){
            //         $compound['DNT']  = $row['dnt'];
            //     }
            // }

            // if(isset($row['stot'])){
            //     if($row['stot'] != null){
            //         $compound['STOT']  = $row['stot'];
            //     }
            // }

            // if(isset($row['ngc'])){
            //     if($row['ngc'] != null){
            //         $compound['NGC']  = $row['ngc'];
            //     }
            // }

            // if(isset($row['target_id'])){
            //     if($row['target_id'] != null){
            //         $compound['Target ID']  = $row['target_id'];
            //     }
            // }

            // if(isset($row['uniprot_ids'])){
            //     if($row['uniprot_ids'] != null){
            //         $compound['UniProt IDs']  = $row['uniprot_ids'];
            //     }
            // }

            // if(isset($row['target_mode'])){
            //     if($row['target_mode'] != null){
            //         $compound['Target mode']  = $row['target_mode'];
            //     }
            // }

            // if(isset($row['reference'])){
            //     if($row['reference'] != null){
            //         $compound['Reference']  = $row['reference'];
            //     }
            // }

            // if(isset($row['available_pdb_codes'])){
            //     if($row['available_pdb_codes'] != null){
            //         $compound['available PDB codes']  = $row['available_pdb_codes'];
            //     }
            // }


            // if(isset($row['alphafold_ids'])){
            //     if($row['alphafold_ids'] != null){
            //         $compound['AlphaFold IDs']  = $row['alphafold_ids'];
            //     }
            // }

            // if(isset($row['name'])){
            //     if($row['name'] != null){
            //         $compound['Name']  = $row['name'];
            //     }
            // }

            // if(isset($row['substance_name'])){
            //     if($row['substance_name'] != null){
            //         $compound['Substance Name']  = $row['substance_name'];
            //     }
            // }

            // if(isset($row['link'])){
            //     if($row['link'] != null){
            //         $compound['Link']  = $row['link'];
            //     }
            // }

            // if(isset($row['tanimoto_similarity'])){
            //     if($row['tanimoto_similarity'] != null){
            //         $compound['Tanimoto Similarity']  = $row['tanimoto_similarity'];
            //     }
            // }

            // if(isset($row['iupac_name'])){
            //     if($row['iupac_name'] != null){
            //         $compound['IUPAC Name']  = $row['iupac_name'];
            //     }
            // }

            // if(isset($row['cas'])){
            //     if($row['cas'] != null){
            //         $compound['CAS']  = $row['cas'];
            //     }
            // }
            // if(isset($row['dtxsid'])){
            //     if($row['dtxsid'] != null){
            //         $compound['DTXSID']  = $row['dtxsid'];
            //     }
            // }
            // if(isset($row['type'])){
            //     if($row['type'] != null){
            //         $compound['Type']  = $row['type'];
            //     }
            // }
            // if(isset($row['smiles'])){
            //     if($row['smiles'] != null){
            //         $compound['SMILES']  = $row['smiles'];
            //     }
            // }
            // if(isset($row['chembl_id'])){
            //     if($row['chembl_id'] != null){
            //         $compound['ChEMBL ID']  = $row['chembl_id'];
            //     }
            // }
            // if(isset($row['chemical_class'])){
            //     if($row['chemical_class'] != null){
            //         $compound['Chemical Class']  = $row['chemical_class'];
            //     }
            // }
            // if(isset($row['inchikey'])){
            //     if($row['inchikey'] != null){
            //         $compound['InChI Key']  = $row['inchikey'];
            //     }
            // }
            // if(isset($row['inchi'])){
            //     if($row['inchi'] != null){
            //         $compound['InChI']  = $row['inchi'];
            //     }
            // }
            // if(isset($row['used_in'])){
            //     if($row['used_in'] != null){
            //         $compound['used_in']  = $row['used_in'];
            //     }
            // }
            $compound->save();
        }
    }

    private function randomPassword($cnt = 8){

	    $alphabet = 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ23456789';
	    $pass = array(); //remember to declare $pass as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache

	    for ($i = 0; $i < $cnt; $i++) {

	        $n = rand(0, $alphaLength);

	        $pass[] = $alphabet[$n];
	    }

	    $pass = implode($pass);

	    return $pass;//turn the array into a string
    }

    private function storeAccess($request, $user){
        $accessLevels = $request->access_levels;
        if($accessLevels){
            for($i = 0; $i < count($accessLevels); $i++){
                $accessLevel = AccessLevelModel::where('membership_id', $request->membership_id)
                    ->where('id', $accessLevels[$i])
                    ->first();
                if($accessLevel){
                    $newAccess = new MembershipSubscriptionModel;
                    $newAccess->membership_user_id = $user->id;
                    $newAccess->access_level_id = $accessLevel->id;
                    $newAccess->status = true;
                    $newAccess->type = $accessLevel->expiry;
                    if($accessLevel->expiry != 'lifetime'){
                        $startTime = time();
                        $newAccess->start_date = $startTime;
                        $newAccess->end_date = $this->getEndDate($accessLevel);
                    }
                    $newAccess->save();
                }
            }
        }
        
    }

    private function getEndDate($accessLevel){
        $period = (int)$accessLevel->sub_period;
        $endDate = time();
        if($accessLevel->expiry == 'monthly'){
            $endDate = strtotime("+$period months");
        }elseif($accessLevel->expiry == 'yearly'){
            $endDate = strtotime("+$period years");
        }elseif($accessLevel->expiry == 'weekly'){
            $endDate = strtotime("+$period weeks");
        }elseif($accessLevel->expiry == 'daily'){
            $endDate = strtotime("+$period days");
        }

        return $endDate;
    }

    public static function sendBasicSubEmail($user, $membership)
   	{
        try{
            Mail::to($user->email)->send(new MembershipRegistrationMail($user, $membership));
        }catch(Exception $error){
            Log::info($error->getMessage());
        }
    }
}
