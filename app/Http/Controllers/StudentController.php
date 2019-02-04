<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index(){
        
    return view('index');  
    }

    public function list(){
        $student = Student::all();
    return view('list')->with('students', $student);   
    }

    public function add(){
    return view('addStudent');
    }


    public function store(Request $request){

        $request->validate([
            'student_id' => 'required',
            'name' => 'required',
            'department_name' => 'required',
            
        ]);

        
            $student = new Student;
            $student->student_id = $request->student_id;
            $student->name = $request->name;
            $student->department_name = $request->department_name;
            $student->student_info = $request->student_info;
            
            $student->save();
            return redirect()->route('index');
        

        
    }




    public function edit($id){
        $student = Student::find($id);
        return view('updateStudent')->with('student',$student);
    }

     public function update(Request $request , $id){

        $request->validate([
            'student_id' => 'required',
            'name' => 'required',
            'department_name' => 'required',
            
        ]);
        
            $student = Student::find($id);
            $student->student_id = $request->student_id;
            $student->name = $request->name;
            $student->department_name = $request->department_name;
            $student->student_info = $request->student_info;
            
            $student->save();
            return redirect()->route('list');
            
       
        }

        public function delete($id){
        
            $student = Student::find($id);
            $student->delete();
            return redirect()->route('list');


        }
        public function hello(){
            return view('hello');
        }



    }
