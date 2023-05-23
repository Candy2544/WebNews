<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;

class InfoController extends Controller
{
    public function index(){
        $info = Info::all();
        return view('feed.index',compact('info'));
    }

    public function store(Request $request){
        //checkdata
        $request -> validate([  //$result = array
            'type' => 'required|unique:departments' 
        ],[
            'type.required'=> "กรุณาป้อนข่าวด้วย",
            'type.unique' => 'มีข่าวนี้แล้ว'
        ]
    );

    $info = new Info;
    $info->department_name = $request->department_name;
    $info->user_id = Auth::user()->id;
    $info->save();
    return redirect()->back()->with('sucess', 'บันทึกข้อมูลแล้ว');
    }

    public function getinfo() {
        $info = new Info;
        $getinfo = Info::all();
        $filteredData = Info::where('id_info','title', 'content', 'other_name' ) -> get();
        return view('feed.index',compact('filteredData'));
    }
}
