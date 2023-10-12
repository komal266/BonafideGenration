<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class BonafideController extends Controller
{
    
    public function allbona(){
        $student=Student::all();
        return view('bonafide.allbona', compact('student'));
    }
}
