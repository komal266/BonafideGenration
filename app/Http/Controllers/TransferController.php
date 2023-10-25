<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;


class TransferController extends Controller
{
    public function alltc()
    {
        $students=Student::paginate(15);
        return view ('tc.alltc',compact('students'));
    }
}
