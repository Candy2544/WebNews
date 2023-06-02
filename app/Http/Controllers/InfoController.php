<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use PharIo\Manifest\Author;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function index(){


        $info = Info::all();
        return $info;
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
        return view('feed.index',compact('getinfo'));
    }
}
