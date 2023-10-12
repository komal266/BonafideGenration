<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class StudentController extends Controller
{
    public function index()
    {
        try
        {
        $student=Student::paginate(15);
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
