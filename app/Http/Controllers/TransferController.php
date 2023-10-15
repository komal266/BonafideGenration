<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class TransferController extends Controller
{
    public function alltc()
    {
        $student=Student::all();
        return view ('tc.alltc',compact('student'));
    }
}
