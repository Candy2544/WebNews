<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TyprInfo;
use Illuminate\Support\Facades\DB;

class TypeInfoController extends Controller
{
    public function index()
    { 
        $gettype = TyprInfo::all();
        return $gettype;
    }
}
