<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function welcome(){
        return view("welcome");
    }

    public function create(){
        return view("create");
    }

    public function upload(Request $request){
        $student = new student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->save();
        return view("welcome");
    }

    public function list(){
        $data = student::all();
        return view("list",compact("data"));
    }

    public function update($id){
        $data = student::find($id);
        return view("updateForm",compact('data'));
    }

    public function updateForm(Request $request,$id){
        $student = student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->save();
        return view("welcome");

    }

    public function delete($id){
        $student = student::find($id);
        $student->delete();
        return redirect()->back();
    }
}
