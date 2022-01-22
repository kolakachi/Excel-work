<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Auth, Log, Validator, Storage, File, Str;
use App\Models\CompoundModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function importUsers(Request $request){
        try{
            $path = $request->file('csv_file_upload')->storeAS('text-files', 'GNI.MXF');
            $fullPath = \Storage::path($path);
            $lines = file($fullPath);
            dd(explode(" ", $lines[0]));
            // $membership = new CompoundModel;
            // if($request->hasFile('csv_file_upload')){
            //     Excel::import(new UsersImport($request, $membership), $request->file('csv_file_upload'));
            // }

            // return response()->json([
            //     'error' => false,
            //     'message' => "Users were added successfully"
            // ], 200);


        }catch(Exception $error){
            Log::info('UsersController@importUsers error message: ' . $error->getMessage());
            $message = "Unable to complete request.";
            return response()->json(['message' => $message], 500);
        }
    }

    public function exportUsers()
    {
        $filename =  "merged_compounds.xlsx";
        return Excel::download(new UsersExport(), $filename);
    }
}
