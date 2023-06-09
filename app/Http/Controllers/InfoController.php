<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\TyprInfo;
use PharIo\Manifest\Author;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function index(){
        $info = Info::all();
        $type = TyprInfo::all();
        return  view('feed.upload',compact('info','type'));
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
    }

    public function getinfo() {
        $getinfo = Info::all();
        return view('feed.index') -> with ('getinfo', $getinfo);
    }
}