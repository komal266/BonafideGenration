@extends('layouts.user_type.auth')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
<style>
/* Style the form container */
form {
    background-color: #fff;
    width: 600px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Style the form header (h1) */
h1 {
    text-align: center;
    color: #333;
}

/* Style form labels */
label {
    display: block;
    margin: 10px 0;
    color: #333;
    font-weight: bold;
}

/* Style text input fields */
input[type="text"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* Add this line to prevent padding from increasing the element's size */
}

/* Style the submit button */
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 20px 0;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Add hover effect to the submit button */
input[type="submit"]:hover {
    background-color: #0056b3;
}

</style>

</head>
<div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Edit Student</h5>
                        </div>
                    <div><form method="POST" action="{{ route('students.update', $student->id) }}">
                        @csrf
                        @method('PUT')
                        <label for="first_name">First Name:</label>
                        <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $student->first_name) }}" required><br><br>

                        <label for="middle_name">Middle Name:</label>
                        <input type="text" id="middle_name" name="middle_name" value="{{ old('middle_name', $student->middle_name) }}"><br><br>

                        <label for="last_name">Last Name:</label>
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $student->last_name) }}" required><br><br>

                        <label for="class">Class:</label>
                        <input type="text" id="class" name="class" value="{{ old('class', $student->class) }}"><br><br>

                        <label for="div">Division:</label>
                        <input type="text" id="div" name="div" value="{{ old('div', $student->div) }}"><br><br>

                        <label for="academic_year">Academic Year:</label>
                        <input type="text" id="academic_year" name="academic_year" value="{{ old('academic_year', $student->academic_year) }}"><br><br>

                        <label for="dob">Birthday Date:</label>
                        <input type="date" id="dob" name="dob" value="{{ old('dob', $student->dob) }}"><br><br>

                        <label for="place_of_birth">Place of Birth:</label>
                        <input type="text" id="place_of_birth" name="place_of_birth" value="{{ old('place_of_birth', $student->place_of_birth) }}"><br><br>

                        <label for="caste">Caste:</label>
                        <input type="text" id="caste" name="caste" value="{{ old('caste', $student->caste) }}"><br><br>

                        <label for="religion">Religion:</label>
                        <input type="text" id="religion" name="religion" value="{{ old('religion', $student->religion) }}"><br><br>

                        <label for="gr_no">GR Number:</label>
                        <input type="text" id="gr_no" name="gr_no" value="{{ old('gr_no', $student->gr_no) }}"><br><br>

                        <label for="aadhar_no">Aadhar No:</label>
                        <input type="text" id="aadhar_no" name="aadhar_no" value="{{ old('aadhar_no', $student->aadhar_no) }}"><br><br>

                        <label for="father_name">Father Name:</label>
                        <input type="text" id="father_name" name="father_name" value="{{ old('father_name', $student->father_name) }}"><br><br>

                        <label for "mother_name">Mother Name:</label>
                        <input type="text" id="mother_name" name="mother_name" value="{{ old('mother_name', $student->mother_name) }}"><br><br>

                        <label for="nationality">Nationality:</label>
                        <input type="text" id="nationality" name="nationality" value="{{ old('nationality', $student->nationality) }}"><br><br>

                        <label for="last_school_attended">Last School Attended:</label>
                        <input type="text" id="last_school_attended" name="last_school_attended" value="{{ old('last_school_attended', $student->last_school_attended) }}"><br><br>

                        <label for="date_of_admission">Date of Admission in Class:</label>
                        <input type="date" id="date_of_admission" name="date_of_admission" value="{{ old('date_of_admission', $student->date_of_admission) }}"><br><br>

                        <button type="submit" class="btn bg-gradient-primary btn-sm mb-0">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
@endsection
