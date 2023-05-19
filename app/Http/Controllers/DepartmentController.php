<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;

class DepartmentController extends Controller
{
    public function index(){
        $department = Department::all();
        return view('admin.department.index',compact('department'));
    }

    public function store(Request $request){
        //cgeckdata
        $request -> validate([
                'department_name' => 'required|unique:departments|max:255' 
        ],[
            'department_name.required'=>"กรุณาป้อนชื่อด้วย",
            'department_name.max'=>"ห้ามป้อนเกิน 255 ตัวอักษร",
            'department_name.unique' =>'มีตำแหน่งนี้แล้ว'
        ]
    );

    $department = new Department;
    $department->department_name = $request->department_name;
    $department->user_id = Auth::user()->id;
    $department->save();
    return redirect()->back()->with('sucess', 'บันทึกข้อมูลแล้ว');
    }
}
