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
    function edit($id){
        $student = Student::find($id);
        return view('edit',['data'=> $student]);
    }
    function editStudent(Request $req,$id){
        $student = Student::find($id);
       $student->name = $req->name;
       $student->email = $req->email;
       $student->phone = $req->phone;

       if($student->save())
       {
           return redirect('list');
       }
       else{
           return "Update failed";
       }


    }
}
