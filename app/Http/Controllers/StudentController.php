<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        try
        {
        $student=Student::all();
        return view('students.allstudents', compact('student'));
        }
        catch(Exception $e){
            Echo "Error";
        }
    }

    public function form(){
        return view('students.stuform');
    }
}
