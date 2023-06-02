<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Info;
use App\Models\TyprInfo;
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
        $info = new Info;
        $info->title = $request->input('subject');
        $info->content = $request->input('content');
        $info->other_name = $request->input('other');
        $info->id_type = $request->input('dropdown');
        $info->save();
        return redirect()->route('info');
    }

    public function dropdown ()
    {
        $typeinfo = new TyprInfo;
        return $typeinfo;

    }
}
