<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TyprInfo;

class DropdownController extends Controller
{
    public function index()
    {
        $type = TyprInfo::all();
        return view('components.dropdown', compact('type'));
    }
}
