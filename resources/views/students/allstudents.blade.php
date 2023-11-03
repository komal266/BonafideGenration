@extends('layouts.user_type.auth')

@section('content')

<div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Students</h5>
                        </div>
                        <form method="POST" action="{{ route('stu_new') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn bg-gradient-primary btn-sm mb-0">+ New Student</button>
                        </form>

                    </div>
                </div>
               <!-- Filter by Name -->
               <div class="container">
                <div class="row mb-3">
                    <!-- Filter by Name -->
                    <div class="filter-item col-md-4">
                        <label for="name">Filter by Name:</label>
                        <input class="form-control" id="name-filter" name="name" type="text" placeholder="Enter Name" />
                    </div>

                    <!-- Filter by Class -->
                    <div class="filter-item col-md-4">
                        <label for="class">Filter by Class:</label>
                        <select class="form-control" id="class-filter" name="class">
                            <option value="">All Classes</option>
                            <option value="class1">1</option>
                            <option value="class2">2</option>
                            <!-- Add more class options here -->
                        </select>
                    </div>

                    <!-- Filter by Division -->
                    <div class="filter-item col-md-4">
                        <label for="division">Filter by Div:</label>
                        <select class="form-control" id="division-filter" name="division">
                            <option value="">All Divisions</option>
                            <option value="divisionA">A</option>
                            <option value="divisionB">B</option>
                            <!-- Add more division options here -->
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <button class="btn btn-primary" id="applyFilters">Apply Filters</button>
                    </div>

                    <div class="col-md-4">
                        <button class="btn btn-secondary" id="resetFilters">Reset Filters</button>
                    </div>
        <div>
            <form method="POST" action="{{ route('promote') }}" id="promote-form">
                @csrf
                <button type="button" id="promote-button" class="btn bg-gradient-primary btn-sm mb-0">Promote student to next class</button>
            </form>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const promoteForm = document.getElementById("promote-form");
                const promoteButton = document.getElementById("promote-button");

                promoteButton.addEventListener("click", function () {
                    if (confirm("Are you sure you want to promote all students to the next class?")) {
                        // If the user confirms, submit the form
                        promoteForm.submit();
                    }
                });
            });
        </script>


    </div>
</div>


<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        ID
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Name
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Class
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Div
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $students)
                <tr>
                    <td class="text-center">{{ $students->id }}</td>
                    <td class="text-center">{{ $students->first_name }} {{ $students->middle_name }} {{ $students->last_name }}</td>
                    <td class="text-center">{{ $students->class }}</td>
                    <td class="text-center">{{ $students->div }}</td>
                    <td class="text-center">
                        <form method="get" action="{{ route('editStudent', ['id' => $students->id]) }}" style="display: inline;">
                            <input type="hidden" name="id" value="{{ $students->id }}">
                            <button type="submit" class="btn bg-gradient-primary btn-sm mb-0">Edit Student</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="align-content: center">
            {{ $student->links() }}
        </div>
    </div>
</div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    // Get the student rows
                    const studentRows = document.querySelectorAll('tbody tr');

                    // Get filter elements
                    const nameFilter = document.getElementById('name-filter');
                    const classFilter = document.getElementById('class-filter');
                    const divisionFilter = document.getElementById('division-filter');

                    // Get the apply and reset filter buttons
                    const applyFiltersButton = document.getElementById('applyFilters');
                    const resetFiltersButton = document.getElementById('resetFilters');

                    // Function to apply filters
                    function applyFilters() {
                        const name = nameFilter.value.toLowerCase();
                        const selectedClass = classFilter.value;
                        const selectedDivision = divisionFilter.value;

                        studentRows.forEach(row => {
                            const studentName = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                            const studentClass = row.querySelector('td:nth-child(3)').textContent;
                            const studentDivision = row.querySelector('td:nth-child(4)').textContent;

                            if (
                                studentName.includes(name) &&
                                (selectedClass === '' || studentClass === selectedClass) &&
                                (selectedDivision === '' || studentDivision === selectedDivision)
                            ) {
                                row.style.display = 'table-row';
                            } else {
                                row.style.display = 'none';
                            }
                        });
                    }

                    // Apply filters when the "Apply Filters" button is clicked
                    applyFiltersButton.addEventListener('click', applyFilters);

                    // Reset filters when the "Reset Filters" button is clicked
                    resetFiltersButton.addEventListener('click', () => {
                        nameFilter.value = '';
                        classFilter.value = '';
                        divisionFilter.value = '';

                        studentRows.forEach(row => {
                            row.style.display = 'table-row';
                        });
                    });
                });
            </script>
</html>

@endsection
