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
                        <form method="POST" action="{{ route('stu_form') }}" style="display: inline;">
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
            <input class="form-control" name="name" type="text" placeholder="Enter Name" id="name-filter" />
        </div>

        <!-- Filter by Class -->
        <div class="filter-item col-md-4">
            <label for="class">Filter by Class:</label>
            <select class="form-control" name="class" id="class-filter">
                <option value="">All Classes</option>
                <option value="class1">Class 1</option>
                <option value="class2">Class 2</option>
                <!-- Add more class options here -->
            </select>
        </div>

        <!-- Filter by Division -->
        <div class="filter-item col-md-4">
            <label for="division">Filter by Division:</label>
            <select class="form-control" name="division" id="division-filter">
                <option value="">All Divisions</option>
                <option value="divisionA">Division A</option>
                <option value="divisionB">Division B</option>
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
                <form method="POST" action="{{ route('promote') }}">
                        @csrf
                            <button type="submit" class="btn bg-gradient-primary btn-sm mb-0">Promote student to next class</button>
                </form>
        </div>
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
                        <form method="get" action="{{ route('editStudent') }}" style="display: inline;">
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
    // Get the student rows
    const studentRows = document.querySelectorAll('tbody tr');

    // Get filter elements
    const nameFilter = document.getElementById('name-filter');
    const classFilter = document.getElementById('class-filter');
    const divisionFilter = document.getElementById('division-filter');

    // Get the apply and reset filter buttons
    const applyFiltersButton = document.getElementById('applyFilters');
    const resetFiltersButton = document.getElementById('resetFilters');

    // Apply filters when the "Apply Filters" button is clicked
    applyFiltersButton.addEventListener('click', () => {
        const name = nameFilter.value.toLowerCase();
        const selectedClass = classFilter.value.toLowerCase();
        const selectedDivision = divisionFilter.value.toLowerCase();

        studentRows.forEach(row => {
            const studentName = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
            const studentClass = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
            const studentDivision = row.querySelector('td:nth-child(4)').textContent.toLowerCase();

            if (
                studentName.includes(name) &&
                (selectedClass === '' || studentClass.includes(selectedClass)) &&
                (selectedDivision === '' || studentDivision.includes(selectedDivision))
            ) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Reset filters when the "Reset Filters" button is clicked
    resetFiltersButton.addEventListener('click', () => {
        nameFilter.value = '';
        classFilter.value = '';
        divisionFilter.value = '';

        studentRows.forEach(row => {
            row.style.display = 'table-row';
        });
    });
</script>
</html>

@endsection
