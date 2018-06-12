<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Fees;

class StudentController extends Controller
{
     public function  show()
    {
      $students = Student::all();
      return view('Claudine Wangari.allStudents', ['students' => $students]);
    }
    public function register(Request $request)
    {
      $this->validate($request,[
          'studentNumber' => 'bail|required|unique:students,student_number|integer',
          'fullName' => 'required',
          'DOB' => 'required|date',
          'address' => 'required',
        ],[
          'studentNumber.unique' => ' The Student Number already exists.',
          'fullName.required' => ' The full name of the student is required.',
          'DOB.required' => ' The Date of birth is required.',
          'DOB.date' => ' Kindly select a date.',
          'address.required' => ' The student address is required.',
          
        ]);
      $student = new Student();

      $student->student_number = request('studentNumber');
      $student->full_name = request('fullName');
      $student->date_of_birth = request('DOB');
      $student->address = request('address');       
      
      
      $student->save();
      dd('Student has successfully been registered');
      return redirect('/');
    }
}
