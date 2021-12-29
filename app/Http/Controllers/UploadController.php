<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Session;

class UploadController extends Controller
{
    //
    public function store(Request $request){
         if($request->hasFile('avatar')){
             $formIds = Session::get('formId');
             $file = $request->file('avatar');
             $fileName = $file->getClientOriginalName();
             $extention = $file->extension();
            //  $folder = time(). mt_rand(1,1000);
             $file->storeAs('public/avatars/tmp/'.$formIds, $fileName);
            
            //  TemporaryFile::create([
            //    'folder'=>$folder,
            //    'filename'=>$fileName,
            //  ]);

             Session::put('fileExtention', $extention);
             Session::put('fileName', $fileName);



             
             return $formIds;
         }

         return '';
    }
}
