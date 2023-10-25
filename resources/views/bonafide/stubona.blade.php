@extends('layouts.user_type.auth')

@section('content')
<form method="POST" action="{{ route('bona-print') }}" target="_blank">
    <input type="hidden" name="id" value="{{ $student->id }}">
    <label for="firstName">Student's Name:
        <span>{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</span></label>


    <label for="class">Class:
        <span>{{ $student->class }}</span></label>

    <label for="div">Div:
        <span>{{ $student->div }}</span></label>

    <label for="rollNo">Roll No:
        <span>{{ $student->roll_no }}</span></label>
    <label for="category">Category:
        <span>{{ $student->category }}</span></label>

    <label for="dob">Date of Birth:
        <span>{{ \Carbon\Carbon::parse($student->dob)->format('d/m/Y') }}</span></label>

    <label for="academicYear">Academic Year:
        <span>{{ $student->academic_year }}</span></label>

    <button type="submit">Print</button>


</form>
@endsection
