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
            // บันทึกรูปภาพในฐานข้อมูล
            // $info = new Info;
            // $info->title = $request->input('subject');
            // $info->content = $request->input('content');
            // $info->other_name = $request->input('other');
            // $info->id_type = $request->input('dropdown');
                
            // $request->validate([
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
            // $imageName = time().'.'.$request->image->extension();  
            // $request->image->move(public_path('images'), $imageName);

            
            // $info->image = $imageName;
            // $info->save();

            // return redirect()->back()->with('success', 'ภาพถูกเพิ่มเรียบร้อยแล้ว');
            
            try {
                if ($request->hasFile('image')) {
                //   $path = $request->image->path();
                  $clientOriginalName = $request->image->getClientOriginalName();
                  $newFileName = time() . $clientOriginalName;
                  $uploadedFile = $request->file('image');
          
                  // Save File to local drive
                  $path = $uploadedFile->storeAs('images', $newFileName);
          
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
                // return redirect()->back()->with('success', 'ภาพถูกเพิ่มเรียบร้อยแล้ว');
              }


// if ($request->hasFile('image')) {
                
            //     $image = $request->file('image');
            //     //เอาไฟล์ที่อัพโหลด ไปเก็บไว้ที่ public/storge/images/ชื่อไฟล์เดิม
            //     $folder = 'images';
            //     $filename = time() . '_' . $image->getClientOriginalName();
            //     $image->storeAs($folder, $filename, 'public');
                
            //     return redirect()->back()->with('success', 'ภาพถูกเพิ่มเรียบร้อยแล้ว');
            //     }
            
            // return redirect()->back()->with('error', 'เกิดข้อผิดพลาดในการเพิ่มภาพ');
        /* Store $imageName name in DATABASE from HERE */
    
        // return back()
        //     ->with('success','You have successfully upload image.')
        //     ->with('image',$imageName); 

        // $info = new Info;
        // $info->title = $request->input('subject');
        // $info->content = $request->input('content');
        // $info->other_name = $request->input('other');
        // $info->id_type = $request->input('dropdown');
        // $info->save();
        // return redirect()->route('info');
    }

    public function dropdown ()
    {
        $typeinfo = new TyprInfo;
        return $typeinfo;

    }
}
