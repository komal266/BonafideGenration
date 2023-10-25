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
    public function promoteAllStudents()
{
    // Increment the class attribute of all students by one
    Student::query()->increment('class');

    // Redirect back or to a specific page
    return redirect()->back()->with('success', 'All students promoted to the next class successfully.');
}


    public function form(){
        return view('students.stuform');
    }

    public function edit($id)
{
    // Find the student record by ID
    $student = Student::find($id);
    // Check if the student exists
    if (!$student) {
        return redirect()->route('students.allstudents')->with('error', 'Student not found');
    }
    // Display the view with the student's information and the edit form
    return view('students.viewstu', compact('student'));
}

public function update(Request $request, $id)
{
    // Find the student record by ID
    $student = Student::find($id);

    // Check if the student exists
    if (!$student) {
        return redirect()->route('students.allstudents')->with('error', 'Student not found');
    }

    // Update the student's information based on the request data
    $student->update([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'middle_name' => $request->input('middle_name'),
        'class' => $request->input('class'),
        'div' => $request->input('div'),
        'academic_year' => $request->input('academic_year'),
        'dob' => $request->input('dob'),
        'place_of_birth' => $request->input('place of birth'),
        'caste' => $request->input('caste'),
        'academic_year' => $request->input('academic_year'),
        'religion' => $request->input('religion'),
        'gr_no' => $request->input('gr_no'),
        'aadhar_no' => $request->input('aadhar_no'),
        'father_name' => $request->input('father_no'),
        'mother_name' => $request->input('mother_name'),
        'nationality' => $request->input('nationality'),
        'last_school_attended' => $request->input('last_school_attended'),
        'date_of_admission' => $request->input('date_of_admission'),

        // Add more fields here for the update
    ]);


    // Redirect back to the previous page
    return redirect()->back()->with('success', 'Student information updated successfully');
}
    public function store(Request $request)
{
    // Validate the incoming data
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        // Add validation rules for other fields as needed
    ]);

    // Create a new Student instance and set its properties
    $student = new Student();
    $student->first_name = $request->input('first_name');
    $student->middle_name = $request->input('middle_name');
    $student->last_name = $request->input('last_name');
    $student->class = $request->input('class');
    $student->division = $request->input('division');
    $student->academic_year = $request->input('academic_year');
    $student->birthday_date = $request->input('birthday_date');
    $student->place_of_birth = $request->input('place_of_birth');
    $student->caste = $request->input('caste');
    $student->religion = $request->input('religion');
    $student->gr_no = $request->input('gr_no');
    $student->adhar_no = $request->input('adhar_no');
    $student->father_name = $request->input('father_name');
    $student->mother_name = $request->input('mother_name');
    $student->nationality = $request->input('nationality');
    $student->last_school_attended = $request->input('last_school_attended');
    $student->date_of_admission = $request->input('date_of_admission');

    // Save the student data to the database
    $student->save();

    // Optionally, you can redirect to a success page or return a response
    return redirect()->route('students.index')->with('success', 'Student added successfully');
}
}
