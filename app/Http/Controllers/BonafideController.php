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
        $student=Student::paginate(15);
        return view('bonafide.allbona', compact('student'));
    }
    public function bonafideStudent(Request $request)
    {
    $id = $request->input('id');
    try {
        $student = Student::find($id);

        if ($student) {
            $studentId = $student->id;
            return view('bonafide.stubona', compact('student', 'studentId'));
        } else {
            return view('bonafide.allbona', compact('student'));
        }
    } catch (\Exception $e) {
        // Handle any other exceptions that may occur during the query
        return view('bonafide.allbona');
    }
}

public function bonaprint(Request $request)
{
    try {
        $studentId = $request->input('id');
        $student = Student::find($studentId);

        if (!$student) {
            // Handle the case where the student is not found
            return view('bonafide.stubona');
        }

        $maxBonaReceipt = Student::max('bona_no');
        $newReceiptNumber = $maxBonaReceipt + 1;

        $student->bona_no = $newReceiptNumber;
        $student->save(); // Use save() to update the student's record

        return view('bonafide.printbona', compact('student', 'newReceiptNumber'));
    } catch (\Exception $e) {
        // Handle any other exceptions that may occur during the query
        return view('bonafide.stubona');
    }
}


}
