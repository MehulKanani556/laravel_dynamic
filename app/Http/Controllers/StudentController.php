<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    function add(Request $req){
        $student = new Student();
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phone;
        $student->save();
        if($student){
            return redirect( "list");
        }
    }
    function list(){

        $data = Student::all();

        return view('listStudent',['students'=>$data]);
    }

    function delete($id){
        $isDeleted = Student::destroy($id);
        if($isDeleted){
            return redirect( "list");

        }
    }
}
