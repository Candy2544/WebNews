<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Info;
use App\Models\TyprInfo;
use App\Models\image;
use Illuminate\Http\Request;
use App\Http\Controllers\TypeInfoController;

class UploadController extends Controller
{
    public function index()
    {
        return view('feed.upload');
    }

    // save data
    public function update(Request $request )
    {            
            try {
                if ($request->hasFile('image')) {
                //   $path = $request->image->path();
                $clientOriginalName = $request->image->getClientOriginalName();
                $newFileName = time() .'-'. $clientOriginalName;
                $uploadedFile = $request->file('image');
                  $destination = base_path()."/public/images";
                // Save File to local drive
                  $uploadedFile->move($destination, $newFileName);
                  $path = "images/" . $newFileName;
                  //Save File to Photo table
                  $info = new Info();
                  $info->title = $request->input('subject');
                  $info->content = $request->input('content');
                  $info->other_name = $request->input('other');
                  $info->id_type = $request->input('dropdown');

                  $info->image = $path;
                  $info->save();
                    
                  return redirect()->back()->with('success', 'ภาพถูกเพิ่มเรียบร้อยแล้ว');
                }else{
                    echo 'no';
                }
              } catch (\Throwable $th) {
                echo $th;
              }
    }

    public function dropdown ()
    {
        $typeinfo = new TyprInfo;
        return $typeinfo;
    }
}
