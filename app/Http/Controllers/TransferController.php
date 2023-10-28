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

    public function viewtc(Request $request){
        $id = $request->input('id');
    try {
        $student = Student::find($id);

        if ($student) {
            $studentId = $student->id;
            return view('tc.viewtc', compact('student', 'studentId'));
        } else {
            return view('tc.alltc', compact('student'));
        }
    } catch (\Exception $e) {
        // Handle any other exceptions that may occur during the query
        return view('tc.alltc');
    }
    }
    public function printTC(Request $request) {
        $studentId = $request->input('id');
        $students = Student::find($studentId);
        $newReceiptNumber = null;

        if ($students->lc_date === null) {
            $currentDate = now()->format('Y-m-d');
            $students->lc_date = $currentDate;
        }

        if ($students->lc_no === null) {
            $tc_no = Student::max('lc_no');
            $newReceiptNumber = $tc_no + 1;
            $students->lc_no = $newReceiptNumber;
        }

        if ($students->lc_status === null) {
            $status = 1;
            $students->lc_status = $status;
        }

        try {
            // Save the student model
            $students->save();

            return view('tc.printlc', compact('students', 'newReceiptNumber'));
        } catch (\Exception $e) {
            // Handle the exception, e.g., log the error and return an error response
            return back()->withError('Failed to update student record. Please try again.');
        }
    }


}
