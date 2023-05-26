<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use PharIo\Manifest\Author;

class InfoController extends Controller
{
    public function index(){

        // $info = DB::Info('id_info','title','content','other_name','created_at')->get();
        // return view('feed.index', ['id_info','title','content','other_name','created_at' => $info]);


        $info = Info::all();
        return $info;
        // $info = Info::all();
        // return view('feed.index',[$info]);
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
