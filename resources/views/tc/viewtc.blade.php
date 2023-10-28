@extends('layouts.user_type.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Student Information</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tcprint') }}" target="_blank">
                        @csrf
                        <input type="hidden" name="id" value="{{ $student->id }}">

                        <div class="form-group">
                            <label for="firstName">Student's Name:</label>
                            <span>{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</span>
                        </div>

                        <div class="form-group">
                            <label for="class">Class:</label>
                            <span>{{ $student->class }}</span>
                        </div>

                        <div class="form-group">
                            <label for="div">Div:</label>
                            <span>{{ $student->div }}</span>
                        </div>

                        <div class="form-group">
                            <label for="rollNo">Roll No:</label>
                            <span>{{ $student->roll_no }}</span>
                        </div>

                        <div class="form-group">
                            <label for="category">Category:</label>
                            <span>{{ $student->category }}</span>
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth:</label>
                            <span>{{ \Carbon\Carbon::parse($student->dob)->format('d/m/Y') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="academicYear">Academic Year:</label>
                            <span>{{ $student->academic_year }}</span>
                        </div>

                        <button type="submit" class="btn btn-primary">Print</button>
                    </form>
                    <button onclick="window.history.back()" class="btn btn-primary">Back</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
