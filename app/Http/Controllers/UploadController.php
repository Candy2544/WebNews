<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Info;
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
        $info->save();
        return redirect()->route('info');
    }

    public function dropdown (Request $request )
    {
        $info = new Info;
        $info->title = $request->input('subject');
        $info->content = $request->input('content');
        $info->other_name = $request->input('other');
        $info->type = $request->input('type');
        $info->save();
        return redirect()->route('info');

    }
}
