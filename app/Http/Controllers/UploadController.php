<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index() {
        return view('feed.upload');
    }
    public function update(Request $request,$id) {
            $request->validate([
                'subject' => 'required',
                'content' => 'required',
                'other' => 'required',
            ]);
            
            $info = Info::find($id);
            $info->subject = $request->subject;
            $info->content = $request->content;
            $info->auther = $request->auther;
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