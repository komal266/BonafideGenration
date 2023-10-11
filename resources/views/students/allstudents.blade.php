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
    </div>
</div>
<script>
$(document).ready(function() {
    // Function to handle filter changes and apply filtering
    function applyFilters() {
        // Get the filter values
        var nameFilter = $('#name-filter').val();
        var classFilter = $('#class-filter').val();
        var divisionFilter = $('#division-filter').val();

        // Perform filtering logic here based on the filter values
        // You can use these values to filter your data dynamically
        // For example, you can use jQuery to show/hide elements based on filters

        // For demonstration purposes, you can log the filter values to the console
        console.log('Name Filter: ' + nameFilter);
        console.log('Class Filter: ' + classFilter);
        console.log('Division Filter: ' + divisionFilter);
    }

    // Event handler for the Apply Filters button
    $('#applyFilters').click(function() {
        applyFilters();
    });

    // Event handler for the Reset Filters button
    $('#resetFilters').click(function() {
        // Clear filter inputs and select "All" options
        $('#name-filter').val('');
        $('#class-filter').val('');
        $('#division-filter').val('');

        // Apply filters after resetting (you can remove this line if not needed)
        applyFilters();
    });
});
</script>
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

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
