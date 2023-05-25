<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Info;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index($info)
    {

        return view('feed.upload', compact('info'));
    }

    // save data
    public function update(Request $request)
    {
        $info = new Info;
        $info->title = $request->input('subject');
        $info->content = $request->input('content');
        $info->other_name = $request->input('other');
        $info->id = Auth::user();
        $info->save();
        return redirect()->route('feed.index')->with('success');

        // $subject = $request->input('subject');
        // $content = $request->input('content');
        // $author = $request->input('author');
        // Info::create([
        //     'title' => $subject,
        //     'content' => $content,
        //     'other_name' => $author,
        // ]);

    }
}
