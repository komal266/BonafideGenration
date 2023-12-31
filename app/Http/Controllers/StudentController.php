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
        // Check if the students are currently in class 11 or lower
        $maxClass = 11; // Set the maximum class for promotion to 11
        $studentsToPromote = Student::where('class', '<=', $maxClass)->get();

        if ($studentsToPromote->isEmpty()) {
            return redirect()->back()->with('error', 'No students eligible for promotion.');
        }

        // Increment the class attribute of eligible students by one
        $studentsToPromote->each(function ($student) {
            $student->increment('class');
        });

        // Redirect back or to a specific page
        return redirect()->back()->with('success', 'Students promoted to the next class successfully.');
    }


    public function form(){
        return view('students.newstu');
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
    return view('students.editstu', compact('student'));
}

public function update(Request $request, $id)
{
    // Find the student record by ID
    $student = Student::find($id);

    // Check if the student exists
    if (!$student) {
        return redirect()->route('students.allstudents')->with('error', 'Student not found');
    }

    // Validate the incoming data
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        // Add validation rules for other fields as needed
    ]);

    // Update the student's information based on the request data
    $student->update([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'middle_name' => $request->input('middle_name'),
        'class' => $request->input('class'),
        'div' => $request->input('div'),
        'academic_year' => $request->input('academic_year'),
        'dob' => $request->input('dob'),
        'place_of_birth' => $request->input('place_of_birth'),
        'caste' => $request->input('caste'),
        'religion' => $request->input('religion'),
        'gr_no' => $request->input('gr_no'),
        'aadhar_no' => $request->input('aadhar_no'),
        'father_name' => $request->input('father_name'),
        'mother_name' => $request->input('mother_name'),
        'nationality' => $request->input('nationality'),
        'last_school_attended' => $request->input('last_school_attended'),
        'date_of_admission' => $request->input('date_of_admission'),

        // Add more fields here for the update
    ]);

    // Redirect back to the previous page
    return redirect()->route('students')->with('success', 'Student information updated successfully');
}

    public function store(Request $request)
{
    // Validate the incoming data
    $rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'middle_name' => 'nullable|string',
        'class' => 'nullable|integer',
        'div' => 'nullable|string',
        'academic_year' => 'required|string',
        'dob' => 'nullable|date',
        'place_of_birth' => 'nullable|string',
        'caste' => 'nullable|string',
        'religion' => 'nullable|string',
        'gr_no' => 'required|integer|unique:students',
        'aadhar_no' => 'nullable|string|unique:students',
        'father_name' => 'nullable|string',
        'mother_name' => 'nullable|string',
        'nationality' => 'required|string',
        'last_school_attended' => 'nullable|string',
        'date_of_admission' => 'required|date',
        'application_date' => 'nullable|date',
    ];

    // Perform validation
    $validatedData = $request->validate($rules);

    // Create a new Student instance and set its properties
    $student = new Student();
    $student->first_name = $request->input('first_name');
    $student->middle_name = $request->input('middle_name');
    $student->last_name = $request->input('last_name');
    $student->class = $request->input('class');
    $student->div = $request->input('division');
    $student->academic_year = $request->input('academic_year');
    $student->dob = $request->input('birthday_date');
    $student->place_of_birth = $request->input('place_of_birth');
    $student->caste = $request->input('caste');
    $student->religion = $request->input('religion');
    $student->gr_no = $request->input('gr_no');
    $student->aadhar_no = $request->input('adhar_no');
    $student->father_name = $request->input('father_name');
    $student->mother_name = $request->input('mother_name');
    $student->nationality = $request->input('nationality');
    $student->last_school_attended = $request->input('last_school_attended');
    $student->date_of_admission = $request->input('date_of_admission');
    $student->application_date = $request->input('application_date');

    // Save the student data to the database
    $student->save();

    // Optionally, you can redirect to a success page or return a response
    return redirect()->route('students')->with('success', 'Student added successfully');
}
}
