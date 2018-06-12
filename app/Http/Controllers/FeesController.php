<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Fees;
use App\Student;


class FeesController extends Controller
{
    public function record()
    {
      $fee = new Fees();
      $fee->student_number = request('studentNumber');
      $fee->student_name = request('studentName');
      $fee->date_of_payment = request('DOP');
      $fee->amount = request('amount');       
      
      
      $fee->save();
      return redirect('/');
    }

     public function  showAll()
    {
      $fees = Fees::all();
      $Tfees = Fees::all()->sum('amount');
      return view('Claudine Wangari.allFees', ['fees' => $fees], ['Tfees' => $Tfees]);
    }

     public function  showOne()
    { 
      $search = Input::get ( 'search' );
      $student = Fees::where('student_number',$search)->get();
      $Tfees = Fees::where('student_number',$search)->sum('amount');
    if(count($student) > 0)
        return view('Claudine Wangari.searchResults', ['Tfees' => $Tfees])->withDetails($student)->withQuery ( $search);
    else 
      return view ('Claudine Wangari.searchResults')->withMessage('No Student found. Try to search again !');
    }
}